import requests
import json
import uuid

def test_endpoint(url, method="GET", payload=None):
    """Тестирование эндпоинта MCP сервера"""
    headers = {
        "Content-Type": "application/json"
    }
    
    try:
        print(f"\nТестирование эндпоинта: {url}")
        print(f"Метод: {method}")
        
        if method == "GET":
            response = requests.get(url, headers=headers, timeout=5)
        elif method == "POST":
            response = requests.post(url, json=payload, headers=headers, timeout=5)
        
        print(f"Статус код: {response.status_code}")
        print(f"Ответ: {response.text}")
        
        return response.status_code == 200
        
    except Exception as e:
        print(f"Ошибка при выполнении запроса: {str(e)}")
        return False

def test_mcp_endpoints():
    """Тестирование различных эндпоинтов MCP сервера"""
    base_url = "http://localhost:8000"
    
    print("Тестирование различных эндпоинтов MCP сервера")
    print("=" * 50)
    
    # Список возможных эндпоинтов для тестирования
    endpoints = [
        ("/", "GET"),
        ("/mcp", "GET"),
        ("/mcp/", "GET"),
        ("/rpc", "GET"),
        ("/jsonrpc", "GET"),
        ("/api", "GET"),
        ("/v1", "GET"),
        ("/health", "GET"),
        ("/status", "GET"),
        ("/ping", "GET")
    ]
    
    # Тестирование GET запросов к различным эндпоинтам
    for endpoint, method in endpoints:
        url = f"{base_url}{endpoint}"
        test_endpoint(url, method)
    
    # Тестирование POST запросов с JSON-RPC
    print("\n" + "=" * 50)
    print("Тестирование POST запросов с JSON-RPC")
    
    jsonrpc_payload = {
        "jsonrpc": "2.0",
        "id": str(uuid.uuid4()),
        "method": "initialize",
        "params": {
            "protocolVersion": "2024-11-05",
            "capabilities": {}
        }
    }
    
    post_endpoints = [
        ("/mcp", "POST", jsonrpc_payload),
        ("/mcp/", "POST", jsonrpc_payload),
        ("/rpc", "POST", jsonrpc_payload),
        ("/jsonrpc", "POST", jsonrpc_payload),
        ("/api", "POST", jsonrpc_payload)
    ]
    
    for endpoint, method, payload in post_endpoints:
        url = f"{base_url}{endpoint}"
        test_endpoint(url, method, payload)
    
    print("\n" + "=" * 50)
    print("Тестирование завершено")

if __name__ == "__main__":
    test_mcp_endpoints()
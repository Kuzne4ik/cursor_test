import requests
import json
import uuid

def send_jsonrpc_post_request(url, method, params=None, request_id=None):
    """Отправка POST JSON-RPC 2.0 запроса к MCP серверу"""
    if request_id is None:
        request_id = str(uuid.uuid4())
    
    payload = {
        "jsonrpc": "2.0",
        "id": request_id,
        "method": method
    }
    
    if params is not None:
        payload["params"] = params
    
    headers = {
        "Content-Type": "application/json"
    }
    
    try:
        print(f"\nОтправка POST запроса: {method}")
        print(f"URL: {url}")
        print(f"Параметры: {params}")
        
        response = requests.post(url, json=payload, headers=headers, timeout=15)
        
        print(f"Статус код: {response.status_code}")
        print(f"Заголовки ответа: {dict(response.headers)}")
        print(f"Ответ: {response.text}")
        
        if response.status_code == 200:
            try:
                response_json = response.json()
                print(f"Ответ в формате JSON: {response_json}")
                return response_json
            except json.JSONDecodeError:
                print("Ошибка декодирования JSON")
                return None
        else:
            print(f"Ошибка HTTP: {response.status_code}")
            return None
            
    except Exception as e:
        print(f"Ошибка при выполнении запроса: {str(e)}")
        return None

def test_mcp_server_post_only():
    """Тестирование MCP сервера только с POST запросами"""
    url = "http://localhost:8000/mcp"
    
    print("Тестирование MCP сервера php-xhe-docs-mcp (только POST запросы)")
    print("=" * 60)
    
    # 1. Инициализация соединения
    print("\n1. Инициализация соединения")
    init_response = send_jsonrpc_post_request(
        url, 
        "initialize",
        {
            "protocolVersion": "2024-11-05",
            "capabilities": {
                "tools": {}
            },
            "clientInfo": {
                "name": "test-client",
                "version": "1.0.0"
            }
        }
    )
    
    # 2. Запрос списка доступных инструментов
    print("\n2. Запрос списка доступных инструментов")
    tools_response = send_jsonrpc_post_request(url, "tools/list")
    
    # 3. Запрос списка доступных ресурсов
    print("\n3. Запрос списка доступных ресурсов")
    resources_response = send_jsonrpc_post_request(url, "resources/list")
    
    # 4. Запрос списка доступных промптов
    print("\n4. Запрос списка доступных промптов")
    prompts_response = send_jsonrpc_post_request(url, "prompts/list")
    
    # 5. Запрос информации о сервере
    print("\n5. Запрос информации о сервере")
    server_info_response = send_jsonrpc_post_request(url, "server/info")
    
    # 6. Запрос информации о классах XHE
    print("\n6. Запрос информации о классах XHE")
    xhe_classes_response = send_jsonrpc_post_request(
        url, 
        "tools/call",
        {
            "name": "get_xhe_classes",
            "arguments": {}
        }
    )
    
    # 7. Запрос информации о конкретном классе
    print("\n7. Запрос информации о конкретном классе")
    xhe_class_response = send_jsonrpc_post_request(
        url, 
        "tools/call",
        {
            "name": "get_xhe_class_info",
            "arguments": {
                "class_name": "XHEAnchor"
            }
        }
    )
    
    # 8. Запрос документации по методу
    print("\n8. Запрос документации по методу")
    method_docs_response = send_jsonrpc_post_request(
        url, 
        "tools/call",
        {
            "name": "get_method_documentation",
            "arguments": {
                "class_name": "XHEAnchor",
                "method_name": "get_by_attribute"
            }
        }
    )
    
    # 9. Запрос списка всех методов класса
    print("\n9. Запрос списка всех методов класса")
    methods_list_response = send_jsonrpc_post_request(
        url, 
        "tools/call",
        {
            "name": "get_class_methods",
            "arguments": {
                "class_name": "XHEAnchor"
            }
        }
    )
    
    # 10. Запрос информации о методе с параметрами
    print("\n10. Запрос информации о методе с параметрами")
    method_params_response = send_jsonrpc_post_request(
        url, 
        "tools/call",
        {
            "name": "get_method_info",
            "arguments": {
                "class_name": "XHEAnchor",
                "method_name": "get_by_attribute",
                "include_parameters": True
            }
        }
    )
    
    print("\n" + "=" * 60)
    print("Тестирование завершено")

if __name__ == "__main__":
    test_mcp_server_post_only()
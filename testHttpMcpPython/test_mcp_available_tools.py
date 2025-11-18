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
        print(f"Ответ: {response.text}")
        
        if response.status_code == 200:
            try:
                response_json = response.json()
                if 'result' in response_json and 'content' in response_json['result']:
                    for content_item in response_json['result']['content']:
                        if content_item.get('type') == 'text':
                            try:
                                # Попытка распарсить текст как JSON
                                text_content = json.loads(content_item['text'])
                                print(f"Распарсенный контент: {json.dumps(text_content, indent=2)}")
                            except:
                                print(f"Текстовый контент: {content_item['text']}")
                else:
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

def test_mcp_available_tools():
    """Тестирование доступных инструментов MCP сервера"""
    url = "http://localhost:8000/mcp"
    
    print("Тестирование доступных инструментов MCP сервера php-xhe-docs-mcp")
    print("=" * 60)
    
    # 1. Поиск API по запросу
    print("\n1. Поиск API по запросу 'XHEAnchor'")
    search_response = send_jsonrpc_post_request(
        url, 
        "tools/call",
        {
            "name": "search_api",
            "arguments": {
                "query": "XHEAnchor",
                "limit": 5,
                "include_examples": True
            }
        }
    )
    
    # 2. Получение информации о классе XHEAnchor
    print("\n2. Получение информации о классе XHEAnchor")
    class_info_response = send_jsonrpc_post_request(
        url, 
        "tools/call",
        {
            "name": "get_class_info",
            "arguments": {
                "class_name": "XHEAnchor"
            }
        }
    )
    
    # 3. Получение информации о методе get_by_attribute класса XHEAnchor
    print("\n3. Получение информации о методе get_by_attribute класса XHEAnchor")
    method_info_response = send_jsonrpc_post_request(
        url, 
        "tools/call",
        {
            "name": "get_method_info",
            "arguments": {
                "class_name": "XHEAnchor",
                "method_name": "get_by_attribute"
            }
        }
    )
    
    # 4. Получение примеров для класса XHEAnchor
    print("\n4. Получение примеров для класса XHEAnchor")
    examples_response = send_jsonrpc_post_request(
        url, 
        "tools/call",
        {
            "name": "get_examples",
            "arguments": {
                "class_name": "XHEAnchor",
                "limit": 3
            }
        }
    )
    
    # 5. Получение примеров для метода get_by_attribute класса XHEAnchor
    print("\n5. Получение примеров для метода get_by_attribute класса XHEAnchor")
    method_examples_response = send_jsonrpc_post_request(
        url, 
        "tools/call",
        {
            "name": "get_examples",
            "arguments": {
                "class_name": "XHEAnchor",
                "method_name": "get_by_attribute",
                "limit": 3
            }
        }
    )
    
    # 6. Поиск по категории DOM
    print("\n6. Поиск по категории DOM")
    category_search_response = send_jsonrpc_post_request(
        url, 
        "tools/call",
        {
            "name": "search_api",
            "arguments": {
                "query": "get_by_attribute",
                "category": "DOM",
                "limit": 5
            }
        }
    )
    
    print("\n" + "=" * 60)
    print("Тестирование завершено")

if __name__ == "__main__":
    test_mcp_available_tools()
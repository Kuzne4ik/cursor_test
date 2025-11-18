import asyncio
import websockets
import json
import uuid

async def test_websocket_connection():
    """Тестирование WebSocket соединения с MCP сервером"""
    uri = "ws://localhost:8000/mcp"
    
    try:
        print(f"Подключение к WebSocket: {uri}")
        
        async with websockets.connect(uri) as websocket:
            print("Соединение установлено")
            
            # Отправка JSON-RPC запроса
            request = {
                "jsonrpc": "2.0",
                "id": str(uuid.uuid4()),
                "method": "initialize",
                "params": {
                    "protocolVersion": "2024-11-05",
                    "capabilities": {}
                }
            }
            
            print(f"Отправка запроса: {request}")
            await websocket.send(json.dumps(request))
            
            # Получение ответа
            response = await asyncio.wait_for(websocket.recv(), timeout=5)
            print(f"Получен ответ: {response}")
            
            # Попытка парсинга JSON
            try:
                response_json = json.loads(response)
                print(f"Ответ в формате JSON: {response_json}")
            except json.JSONDecodeError:
                print("Ответ не в формате JSON")
            
            return True
            
    except Exception as e:
        print(f"Ошибка при подключении к WebSocket: {str(e)}")
        return False

async def test_websocket_endpoints():
    """Тестирование различных WebSocket эндпоинтов"""
    base_uri = "ws://localhost:8000"
    
    endpoints = [
        "/mcp",
        "/mcp/",
        "/rpc",
        "/jsonrpc",
        "/api"
    ]
    
    for endpoint in endpoints:
        uri = f"{base_uri}{endpoint}"
        print(f"\nТестирование эндпоинта: {uri}")
        await test_websocket_connection_with_uri(uri)
    
    print("\nТестирование завершено")

async def test_websocket_connection_with_uri(uri):
    """Тестирование WebSocket соединения с указанным URI"""
    try:
        print(f"Подключение к WebSocket: {uri}")
        
        async with websockets.connect(uri) as websocket:
            print("Соединение установлено")
            
            # Отправка простого запроса
            request = {
                "jsonrpc": "2.0",
                "id": str(uuid.uuid4()),
                "method": "ping"
            }
            
            print(f"Отправка запроса: {request}")
            await websocket.send(json.dumps(request))
            
            # Получение ответа
            response = await asyncio.wait_for(websocket.recv(), timeout=5)
            print(f"Получен ответ: {response}")
            
            return True
            
    except Exception as e:
        print(f"Ошибка при подключении к WebSocket: {str(e)}")
        return False

if __name__ == "__main__":
    asyncio.run(test_websocket_endpoints())
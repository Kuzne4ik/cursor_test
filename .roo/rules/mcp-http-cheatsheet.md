# MCP HTTP Request Cheat Sheet

## Quick Reference

### Basic curl Template
```bash
curl -s -X POST "http://localhost:8000/mcp" \
  -H "Content-Type: application/json" \
  -d '{
    "jsonrpc":"2.0",
    "id":NUMBER,
    "method":"METHOD_NAME",
    "params":{PARAMETERS}
  }'
```

### Your Specific Example
```bash
curl -s -X POST "http://localhost:8000/mcp" \
  -H "Content-Type: application/json" \
  -d '{
    "jsonrpc":"2.0",
    "id":10,
    "method":"tools/call",
    "params":{
      "name":"search_api",
      "arguments":{
        "query":"XHEAnchor DOM anchor get click send event focus",
        "limit":20,
        "category":"DOM"
      }
    }
  }'
```

## Common Methods

### List Tools
```bash
curl -s -X POST "http://localhost:8000/mcp" \
  -H "Content-Type: application/json" \
  -d '{"jsonrpc":"2.0","id":1,"method":"tools/list"}'
```

### Call Tool
```bash
curl -s -X POST "http://localhost:8000/mcp" \
  -H "Content-Type: application/json" \
  -d '{
    "jsonrpc":"2.0",
    "id":2,
    "method":"tools/call",
    "params":{
      "name":"TOOL_NAME",
      "arguments":{"param1":"value1","param2":"value2"}
    }
  }'
```

### List Resources
```bash
curl -s -X POST "http://localhost:8000/mcp" \
  -H "Content-Type: application/json" \
  -d '{"jsonrpc":"2.0","id":3,"method":"resources/list"}'
```

### Read Resource
```bash
curl -s -X POST "http://localhost:8000/mcp" \
  -H "Content-Type: application/json" \
  -d '{
    "jsonrpc":"2.0",
    "id":4,
    "method":"resources/read",
    "params":{"uri":"resource://path/to/resource"}
  }'
```

## Required Fields
- `jsonrpc`: "2.0"
- `id`: Unique number/string
- `method`: Method name
- `params`: Method parameters (optional)

## Python Quick Usage
```python
import requests

def mcp_request(method, params=None, request_id=1):
    payload = {
        "jsonrpc": "2.0",
        "id": request_id,
        "method": method
    }
    if params:
        payload["params"] = params
    
    response = requests.post("http://localhost:8000/mcp", 
                           json=payload,
                           headers={"Content-Type": "application/json"})
    return response.json()

# Example
result = mcp_request("tools/call", {
    "name": "search_api",
    "arguments": {"query": "your query", "limit": 20}
})
```

## Server Info
- **URL**: `http://localhost:8000/mcp`
- **Protocol**: JSON-RPC 2.0
- **Method**: POST
- **Content-Type**: application/json
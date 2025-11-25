# MCP HTTP Request Rule

## Overview
This rule defines the standard format for making HTTP requests to MCP (Model Context Protocol) servers using the JSON-RPC 2.0 protocol.

## Request Format

### Basic Structure
```bash
curl -s -X POST "{MCP_SERVER_URL}" \
  -H "Content-Type: application/json" \
  -d '{
    "jsonrpc": "2.0",
    "id": {REQUEST_ID},
    "method": "{METHOD_NAME}",
    "params": {METHOD_PARAMETERS}
  }'
```

### Example from your configuration
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

## Required Parameters

### 1. JSON-RPC Version
- **Field**: `jsonrpc`
- **Value**: `"2.0"`
- **Required**: Yes
- **Description**: Specifies the JSON-RPC protocol version

### 2. Request ID
- **Field**: `id`
- **Type**: Number or String
- **Required**: Yes
- **Description**: Unique identifier for the request-response pairing
- **Best Practice**: Use incremental numbers or UUIDs

### 3. Method
- **Field**: `method`
- **Type**: String
- **Required**: Yes
- **Description**: The RPC method to invoke
- **Common Methods**:
  - `"tools/call"` - Execute a tool
  - `"tools/list"` - List available tools
  - `"resources/read"` - Read a resource
  - `"resources/list"` - List available resources
  - `"prompts/get"` - Get a prompt
  - `"prompts/list"` - List available prompts

### 4. Parameters
- **Field**: `params`
- **Type**: Object
- **Required**: Method-dependent
- **Description**: Parameters specific to the method being called

## Common Method Patterns

### Tool Call Method
```json
{
  "jsonrpc": "2.0",
  "id": 1,
  "method": "tools/call",
  "params": {
    "name": "tool_name",
    "arguments": {
      "param1": "value1",
      "param2": "value2"
    }
  }
}
```

### List Tools Method
```json
{
  "jsonrpc": "2.0",
  "id": 2,
  "method": "tools/list"
}
```

### Resource Read Method
```json
{
  "jsonrpc": "2.0",
  "id": 3,
  "method": "resources/read",
  "params": {
    "uri": "resource://path/to/resource"
  }
}
```

## HTTP Headers
- **Content-Type**: `application/json` (required)
- **Accept**: `application/json` (recommended)
- **User-Agent**: Optional, but recommended for debugging

## Response Format
Expected response structure:
```json
{
  "jsonrpc": "2.0",
  "id": {SAME_AS_REQUEST_ID},
  "result": {RESPONSE_DATA}
}
```

Error response structure:
```json
{
  "jsonrpc": "2.0",
  "id": {SAME_AS_REQUEST_ID},
  "error": {
    "code": {ERROR_CODE},
    "message": "Error description",
    "data": {ADDITIONAL_ERROR_DATA}
  }
}
```

## Implementation Examples

### Python Example
```python
import requests
import json

def make_mcp_request(server_url, method, params=None, request_id=1):
    """Make an HTTP request to MCP server"""
    payload = {
        "jsonrpc": "2.0",
        "id": request_id,
        "method": method
    }
    
    if params:
        payload["params"] = params
    
    headers = {
        "Content-Type": "application/json",
        "Accept": "application/json"
    }
    
    response = requests.post(server_url, json=payload, headers=headers)
    return response.json()

# Usage example
result = make_mcp_request(
    server_url="http://localhost:8000/mcp",
    method="tools/call",
    params={
        "name": "search_api",
        "arguments": {
            "query": "XHEAnchor DOM anchor",
            "limit": 20,
            "category": "DOM"
        }
    },
    request_id=10
)
```

### JavaScript Example
```javascript
async function makeMCPRequest(serverUrl, method, params = null, requestId = 1) {
    const payload = {
        jsonrpc: "2.0",
        id: requestId,
        method: method
    };
    
    if (params) {
        payload.params = params;
    }
    
    const headers = {
        "Content-Type": "application/json",
        "Accept": "application/json"
    };
    
    const response = await fetch(serverUrl, {
        method: "POST",
        headers: headers,
        body: JSON.stringify(payload)
    });
    
    return await response.json();
}

// Usage example
const result = await makeMCPRequest(
    "http://localhost:8000/mcp",
    "tools/call",
    {
        name: "search_api",
        arguments: {
            query: "XHEAnchor DOM anchor",
            limit: 20,
            category: "DOM"
        }
    },
    10
);
```

## Best Practices

1. **Always include unique request IDs** for proper request-response correlation
2. **Handle both success and error responses** appropriately
3. **Set appropriate timeouts** for HTTP requests
4. **Validate JSON structure** before sending requests
5. **Use proper error handling** for network issues
6. **Log requests and responses** for debugging purposes
7. **Rate limit requests** to avoid overwhelming the server

## Error Codes
Common JSON-RPC error codes:
- `-32700`: Parse error
- `-32600`: Invalid Request
- `-32601`: Method not found
- `-32602`: Invalid params
- `-32603`: Internal error
- Custom error codes: Server-specific errors

## Server Configuration
Based on your `.claude/mcpservers.json`, your MCP server is configured as:
- **Server Name**: `php-xhe-docs-mcp`
- **Type**: `streamable-http`
- **URL**: `http://localhost:8000/mcp`
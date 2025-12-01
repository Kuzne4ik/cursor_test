# MCP HTTP Usage Guide for `php-xhe-docs-mcp` Server

## Overview
This guide provides comprehensive instructions for making HTTP requests to the MCP (Model Context Protocol) server `php-xhe-docs-mcp` using the JSON-RPC 2.0 protocol. The server provides access to XHE API documentation and examples through HTTP requests.

## MCP Integration
Use available XHE API classes of the project workspace for working with DOM elements on the page. For getting XHE API classes information, use the server `php-xhe-docs-mcp` with the tools and resources described in this guide.

### MCP Tools Available
- **search_api** - semantic search of PHP classes and methods
- **get_class_info** - get class information  
- **get_method_info** - get method information
- **get_examples** - get code examples

### MCP Resources Available
- `php://class/{class_name}` - class information
- `php://method/{class_name}/{method_name}` - method information
- `php://examples/{class_name}/{method_name}` - usage examples
- `php://category/{category}` - classes by category

**Response Format:** All responses are returned in JSON format via TextContent.

## Server Configuration
- **Server Name**: `php-xhe-docs-mcp`
- **Type**: `streamable-http`
- **URL**: `http://localhost:8000/mcp`
- **Protocol**: JSON-RPC 2.0
- **HTTP Method**: POST
- **Content-Type**: `application/json`

## Request Structure

### Basic Template
```bash
curl -s -X POST "http://localhost:8000/mcp" \
  -H "Content-Type: application/json" \
  -d '{
    "jsonrpc":"2.0",
    "id":UNIQUE_ID,
    "method":"METHOD_NAME",
    "params":{METHOD_PARAMETERS}
  }'
```

### Required Fields
| Field | Type | Required | Description |
|-------|------|----------|-------------|
| `jsonrpc` | String | Yes | Must be `"2.0"` - specifies the JSON-RPC protocol version |
| `id` | Number or String | Yes | Unique identifier for request-response correlation |
| `method` | String | Yes | The RPC method to invoke |
| `params` | Object | Method-dependent | Parameters specific to the method being called |

## Available Methods

### 1. Tools Operations

#### List All Available Tools
```bash
curl -s -X POST "http://localhost:8000/mcp" \
  -H "Content-Type: application/json" \
  -d '{"jsonrpc":"2.0","id":1,"method":"tools/list"}'
```

#### Call a Specific Tool
```bash
curl -s -X POST "http://localhost:8000/mcp" \
  -H "Content-Type: application/json" \
  -d '{
    "jsonrpc":"2.0",
    "id":2,
    "method":"tools/call",
    "params":{
      "name":"TOOL_NAME",
      "arguments":{
        "param1":"value1",
        "param2":"value2"
      }
    }
  }'
```

### 2. Resources Operations

#### List All Available Resources
```bash
curl -s -X POST "http://localhost:8000/mcp" \
  -H "Content-Type: application/json" \
  -d '{"jsonrpc":"2.0","id":3,"method":"resources/list"}'
```

#### Read a Specific Resource
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

### 3. Prompts Operations

#### List All Available Prompts
```bash
curl -s -X POST "http://localhost:8000/mcp" \
  -H "Content-Type: application/json" \
  -d '{"jsonrpc":"2.0","id":5,"method":"prompts/list"}'
```

#### Get a Specific Prompt
```bash
curl -s -X POST "http://localhost:8000/mcp" \
  -H "Content-Type: application/json" \
  -d '{
    "jsonrpc":"2.0",
    "id":6,
    "method":"prompts/get",
    "params":{"name":"PROMPT_NAME"}
  }'
```

## Available Tools

### search_api
Performs semantic search of PHP classes and methods.

**Parameters:**
- `query` (string): Search query
- `limit` (number, optional): Maximum number of results (default: 20)
- `category` (string, optional): Category filter (e.g., "DOM")

**Example:**
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

### get_class_info
Retrieves detailed information about a specific PHP class.

**Parameters:**
- `class_name` (string): Name of the class

### get_method_info
Retrieves detailed information about a specific method.

**Parameters:**
- `class_name` (string): Name of the class
- `method_name` (string): Name of the method

### get_examples
Retrieves code examples for a specific class or method.

**Parameters:**
- `class_name` (string): Name of the class
- `method_name` (string, optional): Name of the method (if not provided, returns all examples for the class)

## Available Resources

### Class Information
- `php://class/{class_name}` - Class information
- `php://method/{class_name}/{method_name}` - Method information
- `php://examples/{class_name}/{method_name}` - Usage examples
- `php://category/{category}` - Classes by category

## Response Format

### Success Response
```json
{
  "jsonrpc": "2.0",
  "id": SAME_AS_REQUEST_ID,
  "result": RESPONSE_DATA
}
```

### Error Response
```json
{
  "jsonrpc": "2.0",
  "id": SAME_AS_REQUEST_ID,
  "error": {
    "code": ERROR_CODE,
    "message": "Error description",
    "data": ADDITIONAL_ERROR_DATA
  }
}
```

## Implementation Examples

### PowerShell (Windows) Implementation
```powershell
# List all tools
Invoke-WebRequest -Uri "http://localhost:8000/mcp" -Method POST -ContentType "application/json" -Body '{"jsonrpc":"2.0","id":1,"method":"tools/list"}'

# Search API
$searchResult = Invoke-WebRequest -Uri "http://localhost:8000/mcp" -Method POST -ContentType "application/json" -Body '{
    "jsonrpc":"2.0",
    "id":2,
    "method":"tools/call",
    "params":{
        "name":"search_api",
        "arguments":{
            "query":"XHEAnchor DOM anchor",
            "limit":20,
            "category":"DOM"
        }
    }
}'

# Read resource
$classInfo = Invoke-WebRequest -Uri "http://localhost:8000/mcp" -Method POST -ContentType "application/json" -Body '{
    "jsonrpc":"2.0",
    "id":3,
    "method":"resources/read",
    "params":{"uri":"php://class/XHEAnchor"}
}'
```

### Python Implementation
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

# Usage examples
# List tools
tools = make_mcp_request("http://localhost:8000/mcp", "tools/list")

# Search API
search_result = make_mcp_request(
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

# Read resource
class_info = make_mcp_request(
    server_url="http://localhost:8000/mcp",
    method="resources/read",
    params={"uri": "php://class/XHEAnchor"},
    request_id=11
)
```

### JavaScript Implementation
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

// Usage examples
const tools = await makeMCPRequest("http://localhost:8000/mcp", "tools/list");

const searchResult = await makeMCPRequest(
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

1. **Request IDs**: Always use unique request IDs for proper request-response correlation. Use incremental numbers or UUIDs.

2. **Error Handling**: Implement proper error handling for both network issues and JSON-RPC errors.

3. **Timeouts**: Set appropriate timeouts for HTTP requests to prevent hanging.

4. **JSON Validation**: Validate JSON structure before sending requests.

5. **Logging**: Log requests and responses for debugging purposes.

6. **Rate Limiting**: Implement rate limiting to avoid overwhelming the server.

7. **Headers**: Always include `Content-Type: application/json` header and preferably `Accept: application/json`.

## Error Codes

Common JSON-RPC error codes:
- `-32700`: Parse error - Invalid JSON was received by the server
- `-32600`: Invalid Request - The JSON sent is not a valid JSON-RPC request
- `-32601`: Method not found - The method does not exist
- `-32602`: Invalid params - Invalid method parameters
- `-32603`: Internal error - Internal JSON-RPC error
- Custom error codes: Server-specific errors

## HTTP Headers

### Required Headers
- `Content-Type: application/json` - Specifies the request body format

### Recommended Headers
- `Accept: application/json` - Indicates the expected response format
- `User-Agent: [your-client-name]` - Helps with debugging and logging

## Quick Reference Commands

### Bash/Linux/macOS
```bash
# List all tools
curl -s -X POST "http://localhost:8000/mcp" -H "Content-Type: application/json" -d '{"jsonrpc":"2.0","id":1,"method":"tools/list"}'

# Search for XHE classes
curl -s -X POST "http://localhost:8000/mcp" -H "Content-Type: application/json" -d '{"jsonrpc":"2.0","id":2,"method":"tools/call","params":{"name":"search_api","arguments":{"query":"XHEAnchor","limit":10}}}'

# Get class information
curl -s -X POST "http://localhost:8000/mcp" -H "Content-Type: application/json" -d '{"jsonrpc":"2.0","id":3,"method":"resources/read","params":{"uri":"php://class/XHEAnchor"}}'

# List all resources
curl -s -X POST "http://localhost:8000/mcp" -H "Content-Type: application/json" -d '{"jsonrpc":"2.0","id":4,"method":"resources/list"}'

### PowerShell (Windows)
```powershell
# List all tools
Invoke-WebRequest -Uri "http://localhost:8000/mcp" -Method POST -ContentType "application/json" -Body '{"jsonrpc":"2.0","id":1,"method":"tools/list"}'

# Search for XHE classes
Invoke-WebRequest -Uri "http://localhost:8000/mcp" -Method POST -ContentType "application/json" -Body '{"jsonrpc":"2.0","id":2,"method":"tools/call","params":{"name":"search_api","arguments":{"query":"XHEAnchor","limit":10}}}'

# Get class information
Invoke-WebRequest -Uri "http://localhost:8000/mcp" -Method POST -ContentType "application/json" -Body '{"jsonrpc":"2.0","id":3,"method":"resources/read","params":{"uri":"php://class/XHEAnchor"}}'

# List all resources
Invoke-WebRequest -Uri "http://localhost:8000/mcp" -Method POST -ContentType "application/json" -Body '{"jsonrpc":"2.0","id":4","method":"resources/list"}'
```

### IMPORTANT NOTE FOR WINDOWS USERS
**DO NOT use curl command in Windows PowerShell!** In Windows PowerShell, `curl` is an alias for `Invoke-WebRequest` but with different syntax. Using curl with Unix/Linux syntax will result in errors. Always use `Invoke-WebRequest` with the PowerShell syntax shown above on Windows systems.
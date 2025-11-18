import requests
import json

try:
    response = requests.get("http://localhost:8000/mcp", timeout=10)
    print(f"Status code: {response.status_code}")
    print("Response content:")
    print(response.text)
except Exception as e:
    print(f"Error occurred: {str(e)}")
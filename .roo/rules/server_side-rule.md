---
description: Client side
---

PHP is a server-side language, but in this case PHP used to write client side code to send known commands to the server and get response.
The server can directly manipulate the DOM of a webpage in the browser.
Send only exist commands to the server and get response implemented in classes with prefix `XHE` in name.
The server uses a headless browser to load, parse, and interact with web pages internally.
All logic, including dynamic page handling (e.g., waiting for content to load, handling frames), is resolved on the server before sending a response.
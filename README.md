property_solution_api_demo
==========================

Small demo of a Property Solution API written in PHP and AJAX.


The purpose of this code is to:
- Ask the API for some data
- Endode/Decode JSON strings.
- Get the data from the API (or return an error message)
- Interconnection between AJAX and PHP
- Display data on a webpage.

In order to achieve the goal, this project includes a mixture various technologies ( PHP, AJAX, JSON, HTML and Javascript).
The Front-end has been based on a simple template generated with Webflow.

Here is the sequence of possible events with used techniques:
1. User clicks a button. 
2. Button fires up AJAX POST message.
3. Appropriate PHP function recieves the message and from that point, everything is handled on a server.
4. PHP creates an object that will handle the connection. (username, passwords and all other info is hardcoded in PHP).
5. Each API call accepts diffenent parameters and those parameters are embedded in JSON string.
6. Appropriate PHP function calls the API and listens for the response.
7. Successfull JSON response is send to AJAX where the HTML is build dynamically.
8. User sees the data on the screen.


This demo is a work in progress and some of the functionality isn't implemented yet. 
However, its a rough representation of a template that can be used with Property Solution API or any other similar API.
Also, its a good example of a front-end and back-end cooperation.



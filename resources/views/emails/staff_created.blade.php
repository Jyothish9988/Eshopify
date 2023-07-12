<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
    <style>
        /* CSS styles for the header */
        .header {
            background-color: #8c8c8c;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        /* CSS styles for the footer */
        .footer {
            background-color: #8c8c8c;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
        
        /* CSS styles for the main content area */
        .content {
            padding: 20px;
            margin: 0 auto;
            max-width: 800px;
        }
        
        /* CSS styles for the order information table */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            font-weight: bold;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        /* CSS styles for the product image */
        .product-image {
            width: 200px;
            height: auto;
            margin-bottom: 20px;
        }
        
        /* CSS styles for A4 size layout */
        @page {
            size: A4;
            margin: 0;
        }
        
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f2f2f2;
        }
        
        /* CSS styles for mobile view */
        @media (max-width: 600px) {
            .content {
                padding: 10px;
                max-width: 400px;
            }
            
            .product-image {
                width: 100%;
                height: auto;
            }
            
            .header {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="company-name">Eshopify</div>
        <div class="company-email">infotechzone360@gmail.com</div>
    </div>
    
    <div class="content">
        <h2 align="center">Staff Details</h2>
        <br>
        <br>
        <br>
        <br>
        <table>
        <tr>
                <th> 

Hello {{ $name }},

A new staff member has been created. Here are the details:

Name: {{ $name }}<br>
Password: {{ $password }}

Thank you for joining our team!

Regards,<br>
Your Company</th>
                
            </tr>
        
        </table>
    </div>
    
    <div class="footer">
        <p>Thank you for your order!</p>
    </div>
</body>
</html>

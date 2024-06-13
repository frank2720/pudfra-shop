### Client side Docs

##### Features

- Shopping cart system that allows users to add, update, and remove items.
- User registration and login functionalities.
- Integration with the Mpesa-Express API for mobile payments.
- Real-time transaction processing and status updates.
- Secure handling of payment data and user information.
- Automated email notifications for various user actions, such as registration, order confirmation, and shipping updates.
##### Live Demo

*You can access the live version of the client side [here](https://maanar-shop.xyz)*

### Admin Side Docs

##### Features


>Product Management

- Add new products with detailed descriptions, pricing, and images. 
- Edit existing product information. 
- Delete products from the catalog. 
- Manage product categories.

##### Admin Dashboard Live Demo

*Login: Navigate to the admin login page by clicking [here](https://maanar-shop.xyz/admin/home) Enter your admin credentials to log in.*

**admin credential:- email: user@maanar.xyz password:password**

### APIs Docs 

##### Features 

Authenticated api. To get the access token to use send ``POST`` request of credentials to the endpoint as shown here
```curl
$ curl -X POST https://maanar-shop.xyz/api/login \
  -H "Accept: application/json" \
  -H "Content-type: application/json" \
  -d "{\"email\": \"user@maanar.xyz\", \"password\": \"password\" }"
```

Output

```json
{
    "token":"2|we9e8SQf4tB6MzDHTKXqguRIRWz99vyWnJgiMTlq89c3c3f8"
}
```

Filtering capabilities, for example send a ``GET`` request to the endpoint as shown below to filter invoice data with status "paid"

```curl
$ curl -X GET -g https://maanar-shop.xyz/api/v1/invoices?status[eq]=Paid \
  -H "Accept: application/json" \
  -H "Content-type: application/json" \
  -H "Authorization: Bearer 2|we9e8SQf4tB6MzDHTKXqguRIRWz99vyWnJgiMTlq89c3c3f8"
```

Output

```json
{
"data":[
    {
        "customerId":"1",
        "amount":"1375",
        "status":"Paid",
        "billedDate":"2022-12-14 14:46:30",
        "paidDate":"2016-04-08 18:12:11"
    },
    {
        "customerId":"1",
        "amount":"6996",
        "status":"Paid",
        "billedDate":"2014-06-14 17:26:50",
        "paidDate":"2019-01-11 11:46:19"
    }
    ...............

    ]
}

```
Include related data for example send ``GET`` request to the endpoint https://maanar-shop.xyz/api/v1/customers?includeInvoices=true to customers invoices when loaded.

```curl
$ curl -X GET -g https://maanar-shop.xyz/api/v1/customers/1?includeInvoices=true \
  -H "Accept: application/json" \
  -H "Content-type: application/json" \
  -H "Authorization: Bearer 2|we9e8SQf4tB6MzDHTKXqguRIRWz99vyWnJgiMTlq89c3c3f8"
```

Bulk invoice post capability. Send a ``POST`` request to the end point https://maanar-shop.xyz/api/v1/invoices/bulk

```curl
$ curl -X POST https://maanar-shop.xyz/api/v1/invoices/bulk \
  -H "Accept: application/json" \
  -H "Content-type: application/json" \
  -H "Authorization: Bearer 2|we9e8SQf4tB6MzDHTKXqguRIRWz99vyWnJgiMTlq89c3c3f8" \
  -d "[{\"customerId\": \"1\", \"amount\": \"2000\", \"status\": \"Paid\", \"billedDate\": \"2016-11-18 19:08:34\",\"paidDate\": \"2017-06-04 16:26:31\" },{\"customerId\": \"1\", \"amount\": \"2400\", \"status\": \"Void\", \"billedDate\": \"2016-11-18 19:08:34\",\"paidDate\": \"2017-06-04 18:26:34\" }]"
```
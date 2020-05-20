---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Birthdate


APIs for friends birthdates
<!-- START_e3d1ac4ac8c50559f38932ac0136dc38 -->
## Create

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/birthdate/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"sunt","birth_date":"nostrum"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/birthdate/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "sunt",
    "birth_date": "nostrum"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/birthdate/store`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | full name of friend
        `birth_date` | string |  required  | birthdate of the friend
    
<!-- END_e3d1ac4ac8c50559f38932ac0136dc38 -->

<!-- START_cd096f3453f8d2fda0bdf1140c7e9c0b -->
## Get
Get all your saved dates

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/birthdate/list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/birthdate/list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/birthdate/list`


<!-- END_cd096f3453f8d2fda0bdf1140c7e9c0b -->

<!-- START_1b322eb4e959b303eed4e30960901084 -->
## Delete

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/v1/birthdate/delete/corrupti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/birthdate/delete/corrupti"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/birthdate/delete/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | id of the birthdate to be deleted

<!-- END_1b322eb4e959b303eed4e30960901084 -->

#Cards


APIs for cards
<!-- START_4d5ff3c346776399721e510b66499c56 -->
## Get
Get the cards

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/card" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/card"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status": true,
    "message": "Cards listing",
    "code": 200,
    "cards": [
        {
            "id": 7,
            "title": "Marriage",
            "name": "Marriage",
            "image": "https:\/\/project.shikshaya.com\/storage\/cards\/7241581979150.jpg",
            "created_at": "2020-02-18 10:09:10",
            "updated_at": "2020-02-18 10:09:10"
        },
        {
            "id": 6,
            "title": "Birthday",
            "name": "Birthday",
            "image": "https:\/\/project.shikshaya.com\/storage\/cards\/10271581979112.jpg",
            "created_at": "2020-02-18 10:08:32",
            "updated_at": "2020-02-18 10:08:32"
        },
        {
            "id": 5,
            "title": "Birthday",
            "name": "Birthday",
            "image": "https:\/\/project.shikshaya.com\/storage\/cards\/6651581979085.jpg",
            "created_at": "2020-02-18 10:08:05",
            "updated_at": "2020-02-18 10:08:05"
        },
        {
            "id": 4,
            "title": "Birthday",
            "name": "Birthday",
            "image": "https:\/\/project.shikshaya.com\/storage\/cards\/2811581979056.jpg",
            "created_at": "2020-02-18 10:07:36",
            "updated_at": "2020-02-18 10:07:36"
        },
        {
            "id": 3,
            "title": "Birthday",
            "name": "Birthday",
            "image": "https:\/\/project.shikshaya.com\/storage\/cards\/491581979000.jpg",
            "created_at": "2020-02-18 10:06:40",
            "updated_at": "2020-02-18 10:06:40"
        },
        {
            "id": 2,
            "title": "Birthday Card",
            "name": "Bishal Lamshal",
            "image": "https:\/\/project.shikshaya.com\/storage\/cards\/8171581955804.jpg",
            "created_at": "2020-02-18 03:40:04",
            "updated_at": "2020-02-18 03:40:04"
        }
    ]
}
```

### HTTP Request
`GET api/v1/card`


<!-- END_4d5ff3c346776399721e510b66499c56 -->

#Events


APIs for event
<!-- START_9c9fa65f9a287d3c60b4d2a602b09fba -->
## Get
Get the events

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status": true,
    "message": "Event Listing",
    "code": 200,
    "events": []
}
```

### HTTP Request
`GET api/v1/events`


<!-- END_9c9fa65f9a287d3c60b4d2a602b09fba -->

<!-- START_151adf9c86ec12d203dcbb26c26b8bae -->
## Get for Top
Get the events

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/events/top" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/events/top"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status": true,
    "message": "Event Listing for top",
    "code": 200,
    "events": []
}
```

### HTTP Request
`GET api/v1/events/top`


<!-- END_151adf9c86ec12d203dcbb26c26b8bae -->

#Feedback


APIs for user feedback
<!-- START_6df5eb4adf7b1eb97dd9f7290bacae6c -->
## Create

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/user/feedback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"feedback":"nostrum","rating":10}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/feedback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "feedback": "nostrum",
    "rating": 10
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/user/feedback`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `feedback` | string |  required  | feedback of user
        `rating` | integer |  optional  | optional number of app rating by user default 0
    
<!-- END_6df5eb4adf7b1eb97dd9f7290bacae6c -->

#Food Shop


APIs for food shops
<!-- START_4b8a71118700a5f1df5664c1e9725ed8 -->
## Food Shop
get all food shops

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/foodshop/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/foodshop/all"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status": true,
    "message": "Food Shops listing",
    "code": 200,
    "foodshops": [
        {
            "id": 1,
            "image": null,
            "name": "ks",
            "items": [
                {
                    "name": "jjlkj",
                    "unit": "nothing",
                    "price": "12",
                    "foodItemAdd": "1"
                }
            ],
            "created_at": "2020-05-13 12:54:01",
            "updated_at": "2020-05-13 12:54:01"
        }
    ]
}
```

### HTTP Request
`GET api/v1/foodshop/all`


<!-- END_4b8a71118700a5f1df5664c1e9725ed8 -->

#Friendship


APIs for friendships
<!-- START_bd178e1c474b86d73d906efda4839ada -->
## Get
Get all friends

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/friendship/get" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/friendship/get"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/friendship/get`


<!-- END_bd178e1c474b86d73d906efda4839ada -->

<!-- START_47f15b4ea5536d8c8d45100ca275c5af -->
## Request Cancel

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/friendship/request" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":16}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/friendship/request"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 16
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/friendship/request`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | user id for the friendship
    
<!-- END_47f15b4ea5536d8c8d45100ca275c5af -->

<!-- START_eaa91e7a3fa8e1bcc6e1995f4a92c5e2 -->
## Accept Request

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/friendship/request/accept" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_id":11}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/friendship/request/accept"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": 11
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/friendship/request/accept`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_id` | integer |  required  | user id for the friendship
    
<!-- END_eaa91e7a3fa8e1bcc6e1995f4a92c5e2 -->

<!-- START_060b83eba53b2f01d1de15247bf3cbf3 -->
## Get All Request

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/friendship/all/request" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/friendship/all/request"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/friendship/all/request`


<!-- END_060b83eba53b2f01d1de15247bf3cbf3 -->

#Gift Apis


APIs for management of the gift items
<!-- START_5989a901c62996199f8d4e236283cf13 -->
## Categories
get categories, name appear if it has at list one gift item

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/gift/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/gift/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status": true,
    "message": "Categories listing",
    "code": 200,
    "categories": [
        {
            "id": 2,
            "name": "Cake"
        },
        {
            "id": 4,
            "name": "Gift"
        }
    ]
}
```

### HTTP Request
`GET api/v1/gift/categories`


<!-- END_5989a901c62996199f8d4e236283cf13 -->

<!-- START_c90d65f60a27955fe15c28471d562b5f -->
## Gifts
get gifts for specific category

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/gift/category/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/gift/category/quia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Category] quia"
}
```

### HTTP Request
`GET api/v1/gift/category/{category}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `category` |  required  | id integer of the category

<!-- END_c90d65f60a27955fe15c28471d562b5f -->

<!-- START_2961af968c6f1c7abbe2057065a8330f -->
## Gifts For Top
get gifts for top position

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/gift/top" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/gift/top"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status": true,
    "message": "Gifts listing",
    "code": 200,
    "gifts": [
        {
            "id": 6,
            "category_id": 2,
            "name": "Carrot Cake",
            "price": 650,
            "oldprice": 700,
            "cover_img": "https:\/\/backend.foodapic.com\/storage\/gifts\/9011586925651.jpeg",
            "height": "22",
            "available": 1,
            "description": "Carrot cake is cake that contains carrots mixed into the batter. Most modern carrot cake recipes have a white cream cheese frosting.",
            "highlights": [
                "Weight : 1 pound",
                " Text : You can mention what you want to write in cake",
                " Shape : Round"
            ],
            "collections": [
                "https:\/\/backend.foodapic.com\/storage\/gifts\/4831586925651.jpeg"
            ],
            "created_at": "2020-04-15 16:10:51",
            "updated_at": "2020-04-15 16:23:31",
            "placeat_top": 1,
            "quantity": 1,
            "total_price": 650
        },
        {
            "id": 5,
            "category_id": 2,
            "name": "White Forest",
            "price": 600,
            "oldprice": 650,
            "cover_img": "https:\/\/backend.foodapic.com\/storage\/gifts\/1401586925235.jpg",
            "height": "20",
            "available": 1,
            "description": "It’s made of vanilla cake layers that are brushed with syrup and filled with homemade cherry jam and vanilla cream. Perfect cake for cherry lovers that is also a great idea for hosting.",
            "highlights": [
                "Weight : 1 pound",
                " Text : You can mention what you want to write in cake",
                " Shape : Round and Heart-shaped"
            ],
            "collections": [
                "https:\/\/backend.foodapic.com\/storage\/gifts\/9191586925235.jpg",
                "https:\/\/backend.foodapic.com\/storage\/gifts\/2881586925235.jpg"
            ],
            "created_at": "2020-04-15 16:03:55",
            "updated_at": "2020-04-15 16:10:58",
            "placeat_top": 1,
            "quantity": 1,
            "total_price": 600
        },
        {
            "id": 3,
            "category_id": 4,
            "name": "Taddy Bear",
            "price": 800,
            "oldprice": 1000,
            "cover_img": "https:\/\/project.shikshaya.com\/storage\/gifts\/12121581441981.jpg",
            "height": "20",
            "available": 1,
            "description": "A gift or a present is an item given to someone without the expectation of payment or anything in return.",
            "highlights": [
                "Quality"
            ],
            "collections": [
                "https:\/\/project.shikshaya.com\/storage\/gifts\/6381581441981.jpg",
                "https:\/\/project.shikshaya.com\/storage\/gifts\/13091581441981.jpg",
                "https:\/\/project.shikshaya.com\/storage\/gifts\/12681581441981.jpg",
                "https:\/\/project.shikshaya.com\/storage\/gifts\/11041581441981.jpg"
            ],
            "created_at": "2020-02-12 04:56:21",
            "updated_at": "2020-02-13 03:10:12",
            "placeat_top": 1,
            "quantity": 1,
            "total_price": 800
        },
        {
            "id": 2,
            "category_id": 2,
            "name": "Strawberry Tuxedo",
            "price": 1200,
            "oldprice": 1500,
            "cover_img": "https:\/\/backend.foodapic.com\/storage\/gifts\/9991586926740.jpg",
            "height": "20",
            "available": 1,
            "description": "This stunning strawberry tuxedo cake is a fun and fruity take on my original tuxedo cake. It’s made with tender chocolate and vanilla cake layers, no-bake chocolate cheesecake layers and loads of strawberries.",
            "highlights": [
                "Weight : 3 pound",
                " Text : You can mention what you want to write in cake",
                " Shape : Round"
            ],
            "collections": [
                "https:\/\/project.shikshaya.com\/storage\/gifts\/12631581441164.png",
                "https:\/\/project.shikshaya.com\/storage\/gifts\/11521581441164.jpg",
                "https:\/\/project.shikshaya.com\/storage\/gifts\/9941581441164.jpg",
                "https:\/\/backend.foodapic.com\/storage\/gifts\/2261586926740.jpg"
            ],
            "created_at": "2020-02-12 04:42:44",
            "updated_at": "2020-04-15 16:47:45",
            "placeat_top": 1,
            "quantity": 1,
            "total_price": 1200
        }
    ]
}
```

### HTTP Request
`GET api/v1/gift/top`


<!-- END_2961af968c6f1c7abbe2057065a8330f -->

#Gifts Orders


APIs for event
<!-- START_7550a46a51374c9b2ae6ee3f77627b3c -->
## Gift Order placement

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/user/order/place" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"items":[],"deliver_address":"nulla","total_price":12}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/order/place"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "items": [],
    "deliver_address": "nulla",
    "total_price": 12
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/user/order/place`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `items` | array |  required  | details of items ordered name,unit price, quantity etc
        `deliver_address` | string |  required  | address of the users to be delivered
        `total_price` | integer |  required  | total price of the order
    
<!-- END_7550a46a51374c9b2ae6ee3f77627b3c -->

<!-- START_a81c9239af8aef3a041ef682dbdbf5d8 -->
## Get all users order

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/user/order/list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/order/list"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/order/list`


<!-- END_a81c9239af8aef3a041ef682dbdbf5d8 -->

#Hotel Apis


APIs for hotel related things
<!-- START_1626898e456ebc2f3208f9036c240686 -->
## Hotel management for apis
get all locations with hotels and galleries

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/location/hotels" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/location/hotels"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/location/hotels`


<!-- END_1626898e456ebc2f3208f9036c240686 -->

<!-- START_e9727db33275cd877c816381959eef59 -->
## Indoor Hotels
get all indoor type hotels

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/hotel/indoor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/hotel/indoor"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status": true,
    "message": "Indoor hotel listing",
    "code": 200,
    "locations": [
        [
            {
                "id": 8,
                "name": "Bhaktapur",
                "created_at": "2020-04-13 15:08:37",
                "updated_at": "2020-04-13 15:08:37",
                "latitude": "27.704332",
                "longitude": "85.452118",
                "hotels": [
                    {
                        "id": 13,
                        "name": "Local Bhale",
                        "logo_url": "https:\/\/backend.foodapic.com\/storage\/hotels\/logo\/181586753935.jpg",
                        "address": "Pepsi cola, Bhaktapur",
                        "description": "Local Bhale  prepares and serves food and drinks to customers.  Local Provide a typical nepali , indian and continental food available.",
                        "phone": "9851016868",
                        "website": "www.localbhale.com",
                        "open_time": "8am-10pm",
                        "created_at": "2020-04-13 15:10:39",
                        "updated_at": "2020-04-13 16:28:55",
                        "type": "indoor",
                        "facilities": [
                            "Wifi",
                            " Food Delivery"
                        ],
                        "galleries": [
                            {
                                "id": 31,
                                "hotel_id": 13,
                                "name": "rato bhala",
                                "image": "8871586833035.jpg",
                                "image_url": "https:\/\/backend.foodapic.com\/storage\/hotels\/gallery\/8871586833035.jpg",
                                "created_at": "2020-04-14 14:27:15",
                                "updated_at": "2020-04-14 14:27:15"
                            }
                        ]
                    }
                ]
            }
        ]
    ]
}
```

### HTTP Request
`GET api/v1/hotel/indoor`


<!-- END_e9727db33275cd877c816381959eef59 -->

<!-- START_a12eefc95453fc0f768f7f4505c70080 -->
## Outdoor Hotels
get all outdoor type hotels

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/hotel/outdoor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/hotel/outdoor"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status": true,
    "message": "Outdoor hotel listing",
    "code": 200,
    "locations": [
        [
            {
                "id": 9,
                "name": "Kawasoti",
                "created_at": "2020-04-14 19:52:30",
                "updated_at": "2020-04-14 19:52:30",
                "latitude": "27.641533",
                "longitude": "84.125164",
                "hotels": [
                    {
                        "id": 14,
                        "name": "Hotel the full moon",
                        "logo_url": "https:\/\/backend.foodapic.com\/storage\/hotels\/logo\/8221586852806.PNG",
                        "address": "Film Hall Chok, Kawasoti",
                        "description": "Hotel the full moon prepares and serves food and drinks to customers. Hotel the full moon Provide a typical nepali , indian and continental food available.",
                        "phone": "9857041158",
                        "website": "www.hotelthefullmoon.com",
                        "open_time": "8am-10pm",
                        "created_at": "2020-04-14 19:56:46",
                        "updated_at": "2020-04-14 19:56:46",
                        "type": "outdoor",
                        "facilities": [
                            "Wifi",
                            " Ac",
                            " Attach Room",
                            " Hot Water",
                            " Food Delivery"
                        ],
                        "galleries": [
                            {
                                "id": 32,
                                "hotel_id": 14,
                                "name": "hotel fullmoon",
                                "image": "5601586852836.PNG",
                                "image_url": "https:\/\/backend.foodapic.com\/storage\/hotels\/gallery\/5601586852836.PNG",
                                "created_at": "2020-04-14 19:57:16",
                                "updated_at": "2020-04-14 19:57:16"
                            }
                        ]
                    }
                ]
            }
        ]
    ]
}
```

### HTTP Request
`GET api/v1/hotel/outdoor`


<!-- END_a12eefc95453fc0f768f7f4505c70080 -->

<!-- START_7314c19487afed92d65c5fae42067e0f -->
## Single Hotel
Informations about single hotel

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/hotel/expedita" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/hotel/expedita"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status": true,
    "message": "Hotel Information",
    "code": 200,
    "hotel": []
}
```

### HTTP Request
`GET api/v1/hotel/{id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | integer type id of the hotel

<!-- END_7314c19487afed92d65c5fae42067e0f -->

#Hotel Menus


APIs for hotel menus
<!-- START_b32e0f9e7a93c320e9d11adfd854a511 -->
## Menus
get all menus for related hotel

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/hotel/menus/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"hotel_id":6}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/hotel/menus/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "hotel_id": 6
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "status": false,
    "code": 404,
    "message": "No menus are available"
}
```

### HTTP Request
`GET api/v1/hotel/menus/{hotel_id}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `hotel_id` | integer |  required  | hotel id for the menus of hotels
    
<!-- END_b32e0f9e7a93c320e9d11adfd854a511 -->

<!-- START_a6fb471b9f4d0a991551d6b08de76db9 -->
## Packages
get all package for related hotel

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/hotel/packages/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"hotel_id":18}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/hotel/packages/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "hotel_id": 18
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "status": false,
    "code": 404,
    "message": "No menus are available"
}
```

### HTTP Request
`GET api/v1/hotel/packages/{hotel_id}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `hotel_id` | integer |  required  | hotel id for the packages of hotel
    
<!-- END_a6fb471b9f4d0a991551d6b08de76db9 -->

#Hotel post like api


APIs for managing users post like and comment
<!-- START_0dea4acf799c0817beefb9a1c2248bf3 -->
## Hotel posts listing
get hotel post with hotel

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/hotel/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/hotel/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status": true,
    "message": "Hotel posts listing",
    "code": 200,
    "posts": [
        {
            "id": 6,
            "hotel_id": 13,
            "post": "२०७७ सालले खुसी, शान्ति र समृदि ल्यायोस यहि छ नव बर्षको शुभकामना !",
            "images": [
                "https:\/\/backend.foodapic.com\/storage\/hotels\/post\/13291586836886.jpg"
            ],
            "created_at": "2020-04-14 15:31:26",
            "updated_at": "2020-04-14 15:31:26",
            "comments_count": 0,
            "likes_count": 1,
            "type": "hotel_post",
            "isliked": false,
            "hotel": {
                "id": 13,
                "name": "Local Bhale",
                "logo_url": "https:\/\/backend.foodapic.com\/storage\/hotels\/logo\/181586753935.jpg"
            }
        }
    ]
}
```

### HTTP Request
`GET api/v1/hotel/posts`


<!-- END_0dea4acf799c0817beefb9a1c2248bf3 -->

<!-- START_1d44571845caf4e760deda54dc451d98 -->
## Like or dislike the hotel post

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/hotel/post/toggle-like/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":17}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/hotel/post/toggle-like/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 17
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/hotel/post/toggle-like/{post_id}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `post_id` | integer |  required  | id of the hotel post to be liked or disliked
    
<!-- END_1d44571845caf4e760deda54dc451d98 -->

<!-- START_f021d6ef4b780e9afa4ea9e684080112 -->
## Delete hotel comment

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/hotel/post/comment/delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"commnet_id":13}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/hotel/post/comment/delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "commnet_id": 13
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/hotel/post/comment/delete`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `commnet_id` | integer |  required  | id of the hotel post to be deleted
    
<!-- END_f021d6ef4b780e9afa4ea9e684080112 -->

<!-- START_05b5c5b75f4019be01ae86341eccb5f9 -->
## Create hotel post comment

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/hotel/post/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":16,"comment":"laudantium"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/hotel/post/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 16,
    "comment": "laudantium"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/hotel/post/comment`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `post_id` | integer |  required  | current hotel post id to be commented
        `comment` | string |  required  | comment text
    
<!-- END_05b5c5b75f4019be01ae86341eccb5f9 -->

<!-- START_446059d96acbf53bb974b6ba1870d2f7 -->
## Get all hotel posts

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/hotel/posts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"hotel_id":6}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/hotel/posts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "hotel_id": 6
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status": true,
    "message": "Hotel Post Listing",
    "code": 200,
    "posts": {
        "current_page": 1,
        "data": [],
        "first_page_url": "http:\/\/localhost\/api\/v1\/hotel\/posts\/1?page=1",
        "from": null,
        "last_page": 1,
        "last_page_url": "http:\/\/localhost\/api\/v1\/hotel\/posts\/1?page=1",
        "next_page_url": null,
        "path": "http:\/\/localhost\/api\/v1\/hotel\/posts\/1",
        "per_page": 7,
        "prev_page_url": null,
        "to": null,
        "total": 0
    }
}
```

### HTTP Request
`GET api/v1/hotel/posts/{hotel_id}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `hotel_id` | integer |  required  | hotel id of the hotel
    
<!-- END_446059d96acbf53bb974b6ba1870d2f7 -->

<!-- START_8a3359a30f4ad8e585997556feaa5247 -->
## Get hotel post comments

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/hotel/post/comment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":5}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/hotel/post/comment/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 5
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/hotel/post/comment/{post_id}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `post_id` | integer |  required  | id of the hotel post
    
<!-- END_8a3359a30f4ad8e585997556feaa5247 -->

#House Party


APIs for house party
<!-- START_65e8e9c65fb82d8bcd975c1107e66e33 -->
## House Party
get all house parties

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/houseparty/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/houseparty/all"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status": true,
    "message": "House party listing",
    "code": 200,
    "houseparties": [
        {
            "id": 2,
            "image": "http:\/\/localhost\/bishal\/public\/storage\/houseparty\/7051589322668.png",
            "name": "House party one",
            "items": [
                {
                    "name": "Item 1",
                    "unit": "nothing",
                    "price": "120",
                    "foodItemAdd": "1"
                }
            ],
            "created_at": "2020-05-13 04:16:08",
            "updated_at": "2020-05-13 04:16:08"
        }
    ]
}
```

### HTTP Request
`GET api/v1/houseparty/all`


<!-- END_65e8e9c65fb82d8bcd975c1107e66e33 -->

#News


APIs for managing news
<!-- START_eff3de500a74b38af2f02b1ee79df2db -->
## Get
Get all news items

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status": true,
    "message": "News listing with pagination",
    "code": 200,
    "news": {
        "current_page": 1,
        "data": [
            {
                "id": 5,
                "title": "A healthy diet is essential for good health and nutrition.",
                "description": "It protects you against many chronic noncommunicable diseases, such as heart disease, diabetes and cancer. Eating a variety of foods and consuming less salt, sugars and saturated and industrially-produced trans-fats, are essential for healthy diet.\r\n\r\nA healthy diet comprises a combination of different foods. These include:\r\n\r\nStaples like cereals (wheat, barley, rye, maize or rice) or starchy tubers or roots (potato, yam, taro or cassava).\r\nLegumes (lentils and beans).\r\nFruit and vegetables.\r\nFoods from animal sources (meat, fish, eggs and milk).\r\nHere is some useful information, based on WHO recommendations, to follow a healthy diet, and the benefits of doing so.\r\n\r\nBreastfeed babies and young children:\r\nA healthy diet starts early in life - breastfeeding fosters healthy growth, and may have longer-term health benefits, like reducing the risk of becoming overweight or obese and developing noncommunicable diseases later in life.\r\nFeeding babies exclusively with breast milk from birth to 6 months of life is important for a healthy diet. It is also important to introduce a variety of safe and nutritious complementary foods at 6 months of age, while continuing to breastfeed until your child is two years old and beyond.\r\n \r\nEat plenty of vegetables and fruit:\r\nThey are important sources of vitamins, minerals, dietary fibre, plant protein and antioxidants.\r\nPeople with diets rich in vegetables and fruit have a significantly lower risk of obesity, heart disease, stroke, diabetes and certain types of cancer.\r\n \r\nEat less fat:\r\nFats and oils and concentrated sources of energy. Eating too much, particularly the wrong kinds of fat, like saturated and industrially-produced trans-fat, can increase the risk of heart disease and stroke.\r\nUsing unsaturated vegetable oils (olive, soy, sunflower or corn oil) rather than animal fats or oils high in saturated fats (butter, ghee, lard, coconut and palm oil) will help consume healthier fats.\r\nTo avoid unhealthy weight gain, consumption of total fat should not exceed 30% of a person's overall energy intake.",
                "image": "https:\/\/backend.foodapic.com\/storage\/news\/9481586845407.jpeg",
                "created_at": "2020-04-14 17:53:27",
                "updated_at": "2020-04-14 17:53:27"
            },
            {
                "id": 3,
                "title": "How to strengthen your immunity during the coronavirus pandemic.",
                "description": "(CNN)As the coronavirus situation intensifies, you might be wondering: how can I keep myself healthy? And will swallowing a pill protect me from getting sick?\r\n\r\nFirst, there's the not-so-great news. Despite claims you may have seen on the Internet, there's no magic food or pill that is guaranteed to boost your immune system and protect you against coronavirus.\r\n\"There are no specific supplements that will help protect against coronavirus and anyone claiming that is being investigated by the FTC [Federal Trade Commission] and the FDA [Food and Drug Administration],\" said Melissa Majumdar, a registered dietitian and spokesperson for the Academy of Nutrition and Dietetics.\r\n\r\nCarrots, kale and apricots for beta carotene\r\nBeta carotene gets converted to vitamin A, which is essential for a strong immune system. It works by helping antibodies respond to toxins and foreign substances, Majumdar said.\r\nGood sources of beta carotene include sweet potatoes, carrots, mangoes, apricots, spinach, kale, broccoli, squash and cantaloupe.\r\n\r\nOranges, strawberries and broccoli for Vitamin C\r\nVitamin C increases blood levels of antibodies and helps to differentiate lymphocytes (white blood cells), which helps the body determine what kind of protection is needed, Majumdar explained.\r\nSome research has suggested that higher levels of vitamin C (at least 200 milligrams) may slightly reduce the duration of cold symptoms.\r\nYou can easily consume 200 milligrams of vitamin C from a combination of foods such as oranges, grapefruit, kiwi, strawberries, Brussels sprouts, red and green peppers, broccoli, cooked cabbage and cauliflower.\r\n\r\nEggs, cheese, tofu and mushrooms for Vitamin D\r\nVitamin D regulates the production of a protein that \"selectively kills infectious agents, including bacteria and viruses,\" explained Dr. Michael Holick, an expert on Vitamin D research from Boston University who has published more than 500 papers and 18 books on Vitamin D.\r\nVitamin D also alters the activity and number of white blood cells, known as T 2 killer lymphocytes, which can reduce the spread of bacteria and viruses, Holick added.",
                "image": "https:\/\/backend.foodapic.com\/storage\/news\/3451586842936.jpg",
                "created_at": "2020-04-14 17:12:16",
                "updated_at": "2020-04-14 17:12:16"
            }
        ],
        "first_page_url": "http:\/\/localhost\/api\/v1\/news?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http:\/\/localhost\/api\/v1\/news?page=1",
        "next_page_url": null,
        "path": "http:\/\/localhost\/api\/v1\/news",
        "per_page": 10,
        "prev_page_url": null,
        "to": 2,
        "total": 2
    }
}
```

### HTTP Request
`GET api/v1/news`


<!-- END_eff3de500a74b38af2f02b1ee79df2db -->

#Orders


APIs for orders
<!-- START_ae205eb63b24499b588ac55edb9c3feb -->
## Store

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/hotel/place/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"hotel_id":9,"items":[],"amount":2,"note":"neque"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/hotel/place/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "hotel_id": 9,
    "items": [],
    "amount": 2,
    "note": "neque"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/hotel/place/order`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `hotel_id` | integer |  required  | id of the hotel for order
        `items` | array |  required  | items array
        `amount` | integer |  required  | total order amount of the user
        `note` | string |  required  | note from the users
    
<!-- END_ae205eb63b24499b588ac55edb9c3feb -->

<!-- START_ad10946f4e0323ab382be6de5a418fc6 -->
## Confirm

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/hotel/confirm/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"order_id":20,"message":"eveniet"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/hotel/confirm/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "order_id": 20,
    "message": "eveniet"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/hotel/confirm/order`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `order_id` | integer |  required  | id of the order to be confirmed
        `message` | string |  required  | message to be sent to the user
    
<!-- END_ad10946f4e0323ab382be6de5a418fc6 -->

<!-- START_7280de98e904900ee2a06ec0d81125bf -->
## User Orders

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/hotel/orders/user/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/hotel/orders/user/voluptas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/hotel/orders/user/{user_id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `user_id` |  required  | id of the user for orders

<!-- END_7280de98e904900ee2a06ec0d81125bf -->

<!-- START_40912249e4a7a63afdf9b3d2a3cf971f -->
## Get

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/hotel/orders/officia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/hotel/orders/officia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/hotel/orders/{hotel_id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `hotel_id` |  required  | id of the hotel for orders

<!-- END_40912249e4a7a63afdf9b3d2a3cf971f -->

#Search


APIs for searching
<!-- START_22eb39b601477715cdcfe164f37d634b -->
## User
Get users

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/search/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"string":"non"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/search/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "string": "non"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/search/user`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `string` | string |  required  | search string for user
    
<!-- END_22eb39b601477715cdcfe164f37d634b -->

<!-- START_9f5c7c23592dc425fbc1ccbba19fc723 -->
## Hotel
Get Hotels

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/search/hotel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"string":"rem"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/search/hotel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "string": "rem"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/search/hotel`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `string` | string |  required  | search string for hotels
    
<!-- END_9f5c7c23592dc425fbc1ccbba19fc723 -->

#Stories

Story management api
<!-- START_5ca7c3273a6d9b865f3c1d1567fb0d65 -->
## Stories
get stories listing

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/stories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/stories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "status": true,
    "message": "Stories listing",
    "code": 200,
    "stories": [
        {
            "id": 6,
            "name": "Birthday",
            "cover_img": "https:\/\/project.shikshaya.com\/storage\/stories\/11451582468595.jpg",
            "images": [
                "https:\/\/project.shikshaya.com\/storage\/stories\/13431582468595.jpg",
                "http:\/\/project.shikshaya.com\/storage\/stories\/5971582468595.jpg",
                "http:\/\/project.shikshaya.com\/storage\/stories\/781582468595.jpg",
                "https:\/\/project.shikshaya.com\/storage\/stories\/1571582468595.jpg"
            ],
            "created_at": "2020-02-24 02:06:35",
            "updated_at": "2020-02-24 02:06:35"
        },
        {
            "id": 5,
            "name": "Event",
            "cover_img": "https:\/\/project.shikshaya.com\/storage\/stories\/13671581690279.jpg",
            "images": [
                "https:\/\/project.shikshaya.com\/storage\/stories\/11041581690279.jpg",
                "https:\/\/project.shikshaya.com\/storage\/stories\/7901581690279.jpg",
                "https:\/\/project.shikshaya.com\/storage\/stories\/4901581690279.jpg"
            ],
            "created_at": "2020-02-15 01:54:39",
            "updated_at": "2020-02-15 01:54:39"
        },
        {
            "id": 4,
            "name": "Party",
            "cover_img": "https:\/\/project.shikshaya.com\/storage\/stories\/8331581690192.jpg",
            "images": [
                "https:\/\/project.shikshaya.com\/storage\/stories\/9501581690192.jpg",
                "https:\/\/project.shikshaya.com\/storage\/stories\/14861581690192.jpg",
                "https:\/\/project.shikshaya.com\/storage\/stories\/6161581690192.jpg"
            ],
            "created_at": "2020-02-15 01:53:12",
            "updated_at": "2020-02-15 01:53:12"
        },
        {
            "id": 3,
            "name": "Gift",
            "cover_img": "https:\/\/project.shikshaya.com\/storage\/stories\/6921581690124.jpg",
            "images": [
                "https:\/\/project.shikshaya.com\/storage\/stories\/3251581690124.jpg",
                "https:\/\/project.shikshaya.com\/storage\/stories\/2731581690124.jpg",
                "https:\/\/project.shikshaya.com\/storage\/stories\/4981581690124.jpg"
            ],
            "created_at": "2020-02-15 01:52:04",
            "updated_at": "2020-02-15 01:52:04"
        },
        {
            "id": 2,
            "name": "Birthday",
            "cover_img": "https:\/\/project.shikshaya.com\/storage\/stories\/1361581690060.jpg",
            "images": [
                "https:\/\/project.shikshaya.com\/storage\/stories\/10111581690060.jpg",
                "https:\/\/project.shikshaya.com\/storage\/stories\/9801581690060.jpg"
            ],
            "created_at": "2020-02-15 01:51:00",
            "updated_at": "2020-02-15 01:51:00"
        },
        {
            "id": 1,
            "name": "Cake",
            "cover_img": "https:\/\/project.shikshaya.com\/storage\/stories\/1981581689943.jpg",
            "images": [
                "https:\/\/project.shikshaya.com\/storage\/stories\/2971581689943.png",
                "https:\/\/project.shikshaya.com\/storage\/stories\/9821581689943.jpg"
            ],
            "created_at": "2020-02-15 01:49:03",
            "updated_at": "2020-02-15 01:49:03"
        }
    ]
}
```

### HTTP Request
`GET api/v1/stories`


<!-- END_5ca7c3273a6d9b865f3c1d1567fb0d65 -->

#User Management


APIs for managing users
<!-- START_25734369e5f518a944715ea20987786e -->
## Login user

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/login/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"pariatur","password":"est","type":"ea"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/login/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "pariatur",
    "password": "est",
    "type": "ea"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/login/{type?}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | email of user
        `password` | string |  required  | password of the user
        `type` | string |  optional  | optional type of user eg. manager
    
<!-- END_25734369e5f518a944715ea20987786e -->

<!-- START_8ae5d428da27b2b014dc767c2f19a813 -->
## Create user

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"sunt","mobile":"atque","dob":"quo","email":"dignissimos","password":"dolorem","password_confirmation":"dolor","gender":"officia","country":"iusto","works_at":"error","bio":"beatae","image":"et"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "sunt",
    "mobile": "atque",
    "dob": "quo",
    "email": "dignissimos",
    "password": "dolorem",
    "password_confirmation": "dolor",
    "gender": "officia",
    "country": "iusto",
    "works_at": "error",
    "bio": "beatae",
    "image": "et"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/register`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  required  | full name of user
        `mobile` | string |  required  | a unique 10 digits mobile number of user
        `dob` | string |  required  | date of birth of user
        `email` | string |  required  | unique user of email
        `password` | string |  required  | password for user min charecters 8
        `password_confirmation` | string |  required  | password confirmation
        `gender` | string |  optional  | optional default gender is Male
        `country` | string |  optional  | optional country of user optional parameter
        `works_at` | string |  optional  | optional place the user is working now
        `bio` | text |  optional  | optional bio of the user
        `image` | image |  optional  | optional country of user optional parameter
    
<!-- END_8ae5d428da27b2b014dc767c2f19a813 -->

<!-- START_f5f84a10a515cff0c79b41e6834dc92c -->
## Send top up to reset password

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/top-up" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"reiciendis"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/top-up"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "reiciendis"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/top-up`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | email of user
    
<!-- END_f5f84a10a515cff0c79b41e6834dc92c -->

<!-- START_a62f1703e9fba891a3e20ff27854aac0 -->
## Send top up to reset password

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"laboriosam","password":"alias","password_confirmation":"voluptatem"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "laboriosam",
    "password": "alias",
    "password_confirmation": "voluptatem"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/password/reset`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | email of user
        `password` | string |  required  | password min 8 character
        `password_confirmation` | string |  required  | password min 8 character
    
<!-- END_a62f1703e9fba891a3e20ff27854aac0 -->

<!-- START_327d9a608d175131d3fc458a600118c7 -->
## Get All Users
Get the list of all users

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/user/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/all"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/all`


<!-- END_327d9a608d175131d3fc458a600118c7 -->

<!-- START_9b9d20d78c8fba46beee7b1e94b178c5 -->
## Update profile

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/user/profile/update/quo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"repellat","mobile":"cumque","dob":"non","country":"totam","image":"velit"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/profile/update/quo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "repellat",
    "mobile": "cumque",
    "dob": "non",
    "country": "totam",
    "image": "velit"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/user/profile/update/{user_id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `user_id` |  required  | user id to update the user
#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `name` | string |  optional  | optional full name of user
        `mobile` | string |  optional  | optional a unique 10 digits mobile number of user
        `dob` | string |  optional  | optional date of birth of user
        `country` | string |  optional  | optional country of user optional parameter
        `image` | optional |  optional  | image of the user
    
<!-- END_9b9d20d78c8fba46beee7b1e94b178c5 -->

<!-- START_0cea91d108e05e66f52b02a4994c8d2e -->
## Profile Detail

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/user/profile/vel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/profile/vel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/profile/{user_id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `user_id` |  required  | user id for profile detail

<!-- END_0cea91d108e05e66f52b02a4994c8d2e -->

#User Post Management


APIs for managing users post
<!-- START_02f7b68b4437149e748b91176f2bf15c -->
## Posts of Single user
post with like and comment counts and comments

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/user/post/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/post/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/post/{user_id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `id` |  required  | user id for the posts

<!-- END_02f7b68b4437149e748b91176f2bf15c -->

<!-- START_f4e3e8657ad3b65db645337fe9d30393 -->
## Create user post

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/user/post/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"nobis","images":[]}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/post/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "nobis",
    "images": []
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/user/post/store`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `title` | string |  required  | title of the post or description
        `images` | array |  required  | array of the images max 5
    
<!-- END_f4e3e8657ad3b65db645337fe9d30393 -->

<!-- START_224af1a0bc472cda87d49208306e165c -->
## Comments of Post
Comments of User post

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/user/post/comment/voluptas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/post/comment/voluptas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/post/comment/{post_id}`

#### URL Parameters

Parameter | Status | Description
--------- | ------- | ------- | -------
    `post_id` |  required  | post id of the post

<!-- END_224af1a0bc472cda87d49208306e165c -->

<!-- START_a691e091f03a6923a0603c6589c006c9 -->
## Create post comment

> Example request:

```bash
curl -X POST \
    "http://localhost/api/v1/user/post/comment/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_post_id":19,"comment":"excepturi"}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/post/comment/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_post_id": 19,
    "comment": "excepturi"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/user/post/comment/store`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `user_post_id` | integer |  required  | current post id to be commented
        `comment` | string |  required  | comment text
    
<!-- END_a691e091f03a6923a0603c6589c006c9 -->

<!-- START_d7cf4563ab17484c7198d7bdc29e8584 -->
## Fetch all posts

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/user/fetch/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/fetch/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/fetch/posts`


<!-- END_d7cf4563ab17484c7198d7bdc29e8584 -->

<!-- START_425250dfcffd4e4e89a515e1daaa71c8 -->
## Fetch unique posts
post with like and comment counts and comments

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/user/fetch/post/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":8}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/fetch/post/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 8
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/fetch/post/{id}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | integer |  required  | post id to get post with comments
    
<!-- END_425250dfcffd4e4e89a515e1daaa71c8 -->

#User post like api


APIs for managing users post liked
<!-- START_a8ba2df90c241c559b860e7dd0d171b8 -->
## Check if user has liked the post

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/user/check/like/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":19}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/check/like/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 19
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/check/like/{post_id}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `post_id` | integer |  required  | id of the post to check if user has liked the post or not
    
<!-- END_a8ba2df90c241c559b860e7dd0d171b8 -->

<!-- START_21c3a7399d059d7d5f17949daaa00d48 -->
## Like or dislike the user post

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/v1/user/post/like/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":18}'

```

```javascript
const url = new URL(
    "http://localhost/api/v1/user/post/like/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 18
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/post/like/{post_id}`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `post_id` | integer |  required  | id of the post to be liked or disliked
    
<!-- END_21c3a7399d059d7d5f17949daaa00d48 -->

#general


<!-- START_ffeb21a323d661b8d5ed8072620cc36e -->
## laravel-websockets
> Example request:

```bash
curl -X GET \
    -G "http://localhost/laravel-websockets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/laravel-websockets"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET laravel-websockets`


<!-- END_ffeb21a323d661b8d5ed8072620cc36e -->

<!-- START_7a96267d047ecbef5cd21c3dd1691fe0 -->
## laravel-websockets/api/{appId}/statistics
> Example request:

```bash
curl -X GET \
    -G "http://localhost/laravel-websockets/api/1/statistics" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/laravel-websockets/api/1/statistics"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "peak_connections": {
        "x": [],
        "y": []
    },
    "websocket_message_count": {
        "x": [],
        "y": []
    },
    "api_message_count": {
        "x": [],
        "y": []
    }
}
```

### HTTP Request
`GET laravel-websockets/api/{appId}/statistics`


<!-- END_7a96267d047ecbef5cd21c3dd1691fe0 -->

<!-- START_69dd61efc04363546d99d1d7cba7bf4c -->
## laravel-websockets/auth
> Example request:

```bash
curl -X POST \
    "http://localhost/laravel-websockets/auth" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/laravel-websockets/auth"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST laravel-websockets/auth`


<!-- END_69dd61efc04363546d99d1d7cba7bf4c -->

<!-- START_5f593177feb1276b604ea7c2cec73a03 -->
## laravel-websockets/event
> Example request:

```bash
curl -X POST \
    "http://localhost/laravel-websockets/event" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/laravel-websockets/event"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST laravel-websockets/event`


<!-- END_5f593177feb1276b604ea7c2cec73a03 -->

<!-- START_a114cbb106b4fbbabe00910c4c3fa19c -->
## laravel-websockets/statistics
> Example request:

```bash
curl -X POST \
    "http://localhost/laravel-websockets/statistics" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/laravel-websockets/statistics"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST laravel-websockets/statistics`


<!-- END_a114cbb106b4fbbabe00910c4c3fa19c -->

<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/token/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT \
    "http://localhost/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/scopes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST \
    "http://localhost/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/oauth/personal-access-tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/oauth/personal-access-tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_30059a09ef3f0284c40e4d06962ce08d -->
## dashboard
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard`


<!-- END_30059a09ef3f0284c40e4d06962ce08d -->

<!-- START_d0011eccd4530617608bac7a4faabb54 -->
## dashboard/user
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/user`


<!-- END_d0011eccd4530617608bac7a4faabb54 -->

<!-- START_dc15b897966f84f1f7fecd9ab67b64bf -->
## dashboard/user/edit/{user}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/user/edit/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/user/edit/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/user/edit/{user}`


<!-- END_dc15b897966f84f1f7fecd9ab67b64bf -->

<!-- START_8bb38c625bcc37af2f7112844d6b3553 -->
## dashboard/user/update/{user}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/user/update/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/user/update/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/user/update/{user}`


<!-- END_8bb38c625bcc37af2f7112844d6b3553 -->

<!-- START_e453eb06eb7e2ed65a1482e9f62586f1 -->
## dashboard/user/delete/{user}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/user/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/user/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/user/delete/{user}`


<!-- END_e453eb06eb7e2ed65a1482e9f62586f1 -->

<!-- START_bc9275eb7f241b08e47127fed622e4d7 -->
## dashboard/user/update/permission
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/user/update/permission" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/user/update/permission"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/user/update/permission`


<!-- END_bc9275eb7f241b08e47127fed622e4d7 -->

<!-- START_cb8a26b7a56e86cdac559c9bde37741f -->
## dashboard/posts
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/posts"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/posts`


<!-- END_cb8a26b7a56e86cdac559c9bde37741f -->

<!-- START_48673514ed027cd8dd95687774c149a9 -->
## dashboard/post/view/{post}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/post/view/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/post/view/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\UserPost] 1"
}
```

### HTTP Request
`GET dashboard/post/view/{post}`


<!-- END_48673514ed027cd8dd95687774c149a9 -->

<!-- START_104484665103287ee00e412e1e120554 -->
## dashboard/post/delete/{post}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/post/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/post/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/post/delete/{post}`


<!-- END_104484665103287ee00e412e1e120554 -->

<!-- START_36b961c9c7efe06a85f136c9a4f1a137 -->
## dashboard/hotel
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/hotel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/hotel`


<!-- END_36b961c9c7efe06a85f136c9a4f1a137 -->

<!-- START_21c71a2d68eb7dbf46721d82e59039e2 -->
## dashboard/hotel/create/{id?}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/hotel/create/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/create/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/hotel/create/{id?}`


<!-- END_21c71a2d68eb7dbf46721d82e59039e2 -->

<!-- START_daeb0af948dfbb8f7c88026ecd4dd79c -->
## dashboard/hotel/store/{id?}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/hotel/store/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/store/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/hotel/store/{id?}`


<!-- END_daeb0af948dfbb8f7c88026ecd4dd79c -->

<!-- START_0a077f15e58b7be46b690e7e1d84c10f -->
## dashboard/hotel/delete/{id}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/hotel/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/hotel/delete/{id}`


<!-- END_0a077f15e58b7be46b690e7e1d84c10f -->

<!-- START_37464b3971972f63e8a847946398215e -->
## dashboard/hotel/gallery/{hotel}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/hotel/gallery/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/gallery/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Hotel] 1"
}
```

### HTTP Request
`GET dashboard/hotel/gallery/{hotel}`


<!-- END_37464b3971972f63e8a847946398215e -->

<!-- START_c8b7e2a51013cc9a23501741586dd2fd -->
## dashboard/hotel/gallery/store/{hotel}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/hotel/gallery/store/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/gallery/store/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/hotel/gallery/store/{hotel}`


<!-- END_c8b7e2a51013cc9a23501741586dd2fd -->

<!-- START_1ded33a1e83d1c32117b59d192258a78 -->
## dashboard/hotel/gallery/delete/{gallery?}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/hotel/gallery/delete/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/gallery/delete/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Hotel] delete"
}
```

### HTTP Request
`GET dashboard/hotel/gallery/delete/{gallery?}`


<!-- END_1ded33a1e83d1c32117b59d192258a78 -->

<!-- START_2ea29a41c5ba4a4715a79bf4fda288dd -->
## dashboard/hotel/manager/store/{user}/{hotel}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/hotel/manager/store/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/manager/store/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Hotel] 1"
}
```

### HTTP Request
`GET dashboard/hotel/manager/store/{user}/{hotel}`


<!-- END_2ea29a41c5ba4a4715a79bf4fda288dd -->

<!-- START_7500701fb400e5a680115707b7307502 -->
## dashboard/hotel/manager/delete/{user}/{hotel}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/hotel/manager/delete/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/manager/delete/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Hotel] 1"
}
```

### HTTP Request
`GET dashboard/hotel/manager/delete/{user}/{hotel}`


<!-- END_7500701fb400e5a680115707b7307502 -->

<!-- START_01b1b798af99e4181cd144cf27cec128 -->
## dashboard/hotel/show/{hotel}/{page?}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/hotel/show/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/show/1/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Hotel] 1"
}
```

### HTTP Request
`GET dashboard/hotel/show/{hotel}/{page?}`


<!-- END_01b1b798af99e4181cd144cf27cec128 -->

<!-- START_69ee1c291f50238782f03044ddff7908 -->
## dashboard/hotel/create/post/store/{hotel}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/hotel/create/post/store/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/create/post/store/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/hotel/create/post/store/{hotel}`


<!-- END_69ee1c291f50238782f03044ddff7908 -->

<!-- START_f1a258b3d9a0c188caae9cd6e81e0231 -->
## dashboard/hotel/delete/post/{post}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/hotel/delete/post/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/delete/post/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/hotel/delete/post/{post}`


<!-- END_f1a258b3d9a0c188caae9cd6e81e0231 -->

<!-- START_6faa0023583836a33a949d2268cb7629 -->
## dashboard/hotel/menu/store/{hotel}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/hotel/menu/store/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/menu/store/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/hotel/menu/store/{hotel}`


<!-- END_6faa0023583836a33a949d2268cb7629 -->

<!-- START_17759fa6a01d68f4c2a79a1cb27b41b1 -->
## dashboard/hotel/menu/delete/{menu}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/hotel/menu/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/menu/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/hotel/menu/delete/{menu}`


<!-- END_17759fa6a01d68f4c2a79a1cb27b41b1 -->

<!-- START_b72953808830a6bc0b511490d6b968e4 -->
## dashboard/hotel/package/store/{hotel}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/hotel/package/store/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/package/store/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/hotel/package/store/{hotel}`


<!-- END_b72953808830a6bc0b511490d6b968e4 -->

<!-- START_5ddc6e6c3e98a85ad662c198faa7ed84 -->
## dashboard/hotel/package/delete/{package}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/hotel/package/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/package/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/hotel/package/delete/{package}`


<!-- END_5ddc6e6c3e98a85ad662c198faa7ed84 -->

<!-- START_84d5bd34721000f5e7c9e3a25786a4ae -->
## dashboard/hotel/order/confirm/{order}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/hotel/order/confirm/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/order/confirm/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Order] 1"
}
```

### HTTP Request
`GET dashboard/hotel/order/confirm/{order}`


<!-- END_84d5bd34721000f5e7c9e3a25786a4ae -->

<!-- START_8b33021095ab020b4584985a3d47c2c1 -->
## dashboard/hotel/order/dispatch/{order}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/hotel/order/dispatch/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/order/dispatch/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Order] 1"
}
```

### HTTP Request
`GET dashboard/hotel/order/dispatch/{order}`


<!-- END_8b33021095ab020b4584985a3d47c2c1 -->

<!-- START_420e3743b9ebbb8c19e953dbc354202f -->
## dashboard/hotel/order/success/{order}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/hotel/order/success/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/order/success/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Order] 1"
}
```

### HTTP Request
`GET dashboard/hotel/order/success/{order}`


<!-- END_420e3743b9ebbb8c19e953dbc354202f -->

<!-- START_9d8aa977f729143e25d14d02252b199e -->
## dashboard/hotel/order/invoice/{order}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/hotel/order/invoice/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/hotel/order/invoice/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Order] 1"
}
```

### HTTP Request
`GET dashboard/hotel/order/invoice/{order}`


<!-- END_9d8aa977f729143e25d14d02252b199e -->

<!-- START_63a6b4bd57d829d169e997345619e1f8 -->
## dashboard/gift
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/gift" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/gift"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/gift`


<!-- END_63a6b4bd57d829d169e997345619e1f8 -->

<!-- START_8eb772ca860ebd59ea0442fa250307b4 -->
## dashboard/gift/create/{category?}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/gift/create/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/gift/create/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/gift/create/{category?}`


<!-- END_8eb772ca860ebd59ea0442fa250307b4 -->

<!-- START_6ea970c75a0e45a7f20deb285c7e8d0f -->
## dashboard/gift/show/{gift}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/gift/show/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/gift/show/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Gift] 1"
}
```

### HTTP Request
`GET dashboard/gift/show/{gift}`


<!-- END_6ea970c75a0e45a7f20deb285c7e8d0f -->

<!-- START_f28d3732082d8ad912226e5d7bc02e0c -->
## dashboard/gift/edit/{gift}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/gift/edit/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/gift/edit/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Gift] 1"
}
```

### HTTP Request
`GET dashboard/gift/edit/{gift}`


<!-- END_f28d3732082d8ad912226e5d7bc02e0c -->

<!-- START_23f0b32b1a23a3af4e319ecb9e91f5d3 -->
## dashboard/gift/update/{gift}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/gift/update/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/gift/update/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/gift/update/{gift}`


<!-- END_23f0b32b1a23a3af4e319ecb9e91f5d3 -->

<!-- START_033bd30cc3b5d5bf5d7657dc1fc64bc6 -->
## dashboard/gift/toggle/{gift}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/gift/toggle/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/gift/toggle/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Gift] 1"
}
```

### HTTP Request
`GET dashboard/gift/toggle/{gift}`


<!-- END_033bd30cc3b5d5bf5d7657dc1fc64bc6 -->

<!-- START_2c7c77d0bbaa4157a50915524025c45e -->
## dashboard/gift/store
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/gift/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/gift/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/gift/store`


<!-- END_2c7c77d0bbaa4157a50915524025c45e -->

<!-- START_13a8bc44477439d4f0195c8c3172672a -->
## dashboard/gift/delete/{gift}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/gift/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/gift/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/gift/delete/{gift}`


<!-- END_13a8bc44477439d4f0195c8c3172672a -->

<!-- START_cd0aca5fc64fd96d60e1d64e9c853e9e -->
## dashboard/category
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/category`


<!-- END_cd0aca5fc64fd96d60e1d64e9c853e9e -->

<!-- START_5ae793941d16130cdef5566cceb13d97 -->
## dashboard/category/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/category/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/category/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/category/create`


<!-- END_5ae793941d16130cdef5566cceb13d97 -->

<!-- START_d57b991abb696ec3f1f53a745a462836 -->
## dashboard/category/store
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/category/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/category/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/category/store`


<!-- END_d57b991abb696ec3f1f53a745a462836 -->

<!-- START_e1dbe827b11a29b8d25f9a4bf7b0fafa -->
## dashboard/category/delete/{category}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/category/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/category/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/category/delete/{category}`


<!-- END_e1dbe827b11a29b8d25f9a4bf7b0fafa -->

<!-- START_32d2dd2626606ab5bc194174ff656491 -->
## dashboard/story
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/story" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/story"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/story`


<!-- END_32d2dd2626606ab5bc194174ff656491 -->

<!-- START_f49572d3f95001fdef9d97e28a2209e2 -->
## dashboard/story/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/story/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/story/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/story/create`


<!-- END_f49572d3f95001fdef9d97e28a2209e2 -->

<!-- START_a363a402ab75e706de085f598cfef805 -->
## dashboard/story/show/{story}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/story/show/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/story/show/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/story/show/{story}`


<!-- END_a363a402ab75e706de085f598cfef805 -->

<!-- START_ddb3b21a270199d073b626c16fe71d24 -->
## dashboard/story/store
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/story/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/story/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/story/store`


<!-- END_ddb3b21a270199d073b626c16fe71d24 -->

<!-- START_d44bad8f3739fa004c09e2ac29279c20 -->
## dashboard/story/delete/{story}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/story/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/story/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/story/delete/{story}`


<!-- END_d44bad8f3739fa004c09e2ac29279c20 -->

<!-- START_fe832e13697cc9b92e02b927c9465d20 -->
## dashboard/card
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/card" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/card"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/card`


<!-- END_fe832e13697cc9b92e02b927c9465d20 -->

<!-- START_4716f4dfa184df84e7209e029b068a9e -->
## dashboard/card/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/card/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/card/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/card/create`


<!-- END_4716f4dfa184df84e7209e029b068a9e -->

<!-- START_27b79979a04c59eefd22412425391bfa -->
## dashboard/card/store
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/card/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/card/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/card/store`


<!-- END_27b79979a04c59eefd22412425391bfa -->

<!-- START_3d24a97cae7b410f6ce6d4aa1ec1732a -->
## dashboard/card/delete/{card}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/card/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/card/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/card/delete/{card}`


<!-- END_3d24a97cae7b410f6ce6d4aa1ec1732a -->

<!-- START_79f8c409e3c7ce2190af0378bc7c8823 -->
## dashboard/news
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/news"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/news`


<!-- END_79f8c409e3c7ce2190af0378bc7c8823 -->

<!-- START_13584fd2bf0a38314fd037134dba471c -->
## dashboard/news/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/news/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/news/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/news/create`


<!-- END_13584fd2bf0a38314fd037134dba471c -->

<!-- START_f788a1e95dfbca80ad452a933d2845dc -->
## dashboard/news/store
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/news/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/news/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/news/store`


<!-- END_f788a1e95dfbca80ad452a933d2845dc -->

<!-- START_cace133be5dd95009234257286c976d0 -->
## dashboard/news/delete/{news}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/news/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/news/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/news/delete/{news}`


<!-- END_cace133be5dd95009234257286c976d0 -->

<!-- START_8720cd6f209ad7c3aea8c3c21d6c2c16 -->
## dashboard/news/show/{news}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/news/show/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/news/show/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\News] 1"
}
```

### HTTP Request
`GET dashboard/news/show/{news}`


<!-- END_8720cd6f209ad7c3aea8c3c21d6c2c16 -->

<!-- START_a38ed043c6b3fa3c4d2e55cff6fc100e -->
## dashboard/news/edit/{news}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/news/edit/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/news/edit/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\News] 1"
}
```

### HTTP Request
`GET dashboard/news/edit/{news}`


<!-- END_a38ed043c6b3fa3c4d2e55cff6fc100e -->

<!-- START_aaff640bf5d32b656a1e6caff7becff7 -->
## dashboard/events
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/events"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/events`


<!-- END_aaff640bf5d32b656a1e6caff7becff7 -->

<!-- START_96aa1298543257d34ce9380a1bce7a48 -->
## dashboard/events/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/events/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/events/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/events/create`


<!-- END_96aa1298543257d34ce9380a1bce7a48 -->

<!-- START_02ddf95014c3eb621c3934b9220965be -->
## dashboard/events/store
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/events/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/events/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/events/store`


<!-- END_02ddf95014c3eb621c3934b9220965be -->

<!-- START_473455d4f2f00487a780f841fec2da15 -->
## dashboard/events/delete/{event}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/events/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/events/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/events/delete/{event}`


<!-- END_473455d4f2f00487a780f841fec2da15 -->

<!-- START_ade6735b112510efa153f54fb1950178 -->
## dashboard/events/place/top/{event}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/events/place/top/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/events/place/top/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Event] 1"
}
```

### HTTP Request
`GET dashboard/events/place/top/{event}`


<!-- END_ade6735b112510efa153f54fb1950178 -->

<!-- START_a11ba9274262a124f7507323f753acbe -->
## dashboard/events/show/{event}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/events/show/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/events/show/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Event] 1"
}
```

### HTTP Request
`GET dashboard/events/show/{event}`


<!-- END_a11ba9274262a124f7507323f753acbe -->

<!-- START_c46e2f8c0e7fec2927d818b1e23e9ce5 -->
## dashboard/events/edit/{event}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/events/edit/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/events/edit/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "No query results for model [App\\Models\\Event] 1"
}
```

### HTTP Request
`GET dashboard/events/edit/{event}`


<!-- END_c46e2f8c0e7fec2927d818b1e23e9ce5 -->

<!-- START_335c631572559f0e59aead60b8237cf2 -->
## dashboard/orders
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/orders"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/orders`


<!-- END_335c631572559f0e59aead60b8237cf2 -->

<!-- START_43e6c801f7b325ea55e64a535ed6beff -->
## dashboard/orders/confirm
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/orders/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/orders/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/orders/confirm`


<!-- END_43e6c801f7b325ea55e64a535ed6beff -->

<!-- START_7c7650ba47a9ece4ca25741d593e5db0 -->
## dashboard/orders/invoiced
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/orders/invoiced" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/orders/invoiced"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/orders/invoiced`


<!-- END_7c7650ba47a9ece4ca25741d593e5db0 -->

<!-- START_fe66b7325a22f0204cf4b596fd8305c1 -->
## dashboard/orders/confirm/{order}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/orders/confirm/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/orders/confirm/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/orders/confirm/{order}`


<!-- END_fe66b7325a22f0204cf4b596fd8305c1 -->

<!-- START_fbc9b0c5fb09d9771fbcb81584d93616 -->
## dashboard/orders/invoice/{order}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/orders/invoice/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/orders/invoice/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/orders/invoice/{order}`


<!-- END_fbc9b0c5fb09d9771fbcb81584d93616 -->

<!-- START_f91ef88efd33cb52339ebe37f7606b19 -->
## dashboard/setting
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/setting" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/setting"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET dashboard/setting`


<!-- END_f91ef88efd33cb52339ebe37f7606b19 -->

<!-- START_8e83b919f3cfbf6a07df2e4752a98f45 -->
## dashboard/setting
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/setting" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/setting"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/setting`


<!-- END_8e83b919f3cfbf6a07df2e4752a98f45 -->

<!-- START_a295572d86e4d37063995ef8a397bad1 -->
## dashboard/houseparty
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/houseparty" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/houseparty"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET dashboard/houseparty`


<!-- END_a295572d86e4d37063995ef8a397bad1 -->

<!-- START_7c6c246ef65b6cbbb7fdaf06291ea6c9 -->
## dashboard/houseparty/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/houseparty/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/houseparty/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET dashboard/houseparty/create`


<!-- END_7c6c246ef65b6cbbb7fdaf06291ea6c9 -->

<!-- START_9d3d368702723134cb8544e8b66da802 -->
## dashboard/houseparty/store
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/houseparty/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/houseparty/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/houseparty/store`


<!-- END_9d3d368702723134cb8544e8b66da802 -->

<!-- START_1fe1bb298abd6bbcf8fcd723a89301bc -->
## dashboard/houseparty/delete/{houseparty}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/houseparty/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/houseparty/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/houseparty/delete/{houseparty}`


<!-- END_1fe1bb298abd6bbcf8fcd723a89301bc -->

<!-- START_597ff4c76c73ac71fda47adda1631248 -->
## dashboard/foodshop
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/foodshop" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/foodshop"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET dashboard/foodshop`


<!-- END_597ff4c76c73ac71fda47adda1631248 -->

<!-- START_c4e2d672f9412256dd28a5436857f737 -->
## dashboard/foodshop/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/foodshop/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/foodshop/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET dashboard/foodshop/create`


<!-- END_c4e2d672f9412256dd28a5436857f737 -->

<!-- START_d1627abcf9570f7478d878acae9438c1 -->
## dashboard/foodshop/store
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/foodshop/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/foodshop/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/foodshop/store`


<!-- END_d1627abcf9570f7478d878acae9438c1 -->

<!-- START_ada728451886e089e13d7cc4486568a0 -->
## dashboard/foodshop/delete/{foodshop}
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/foodshop/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/foodshop/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/foodshop/delete/{foodshop}`


<!-- END_ada728451886e089e13d7cc4486568a0 -->

<!-- START_93dc8769690b5f5555e43da4610f41ed -->
## dashboard/address/store
> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/address/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/address/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/address/store`


<!-- END_93dc8769690b5f5555e43da4610f41ed -->

<!-- START_312bc3466ee5990ec6a98e406fd4d671 -->
## dashboard/address
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/address" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/address"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET dashboard/address`


<!-- END_312bc3466ee5990ec6a98e406fd4d671 -->

<!-- START_160f2af70396f90cf114f8ae72df9d13 -->
## dashboard/address/delete/{address}
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/address/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/address/delete/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET dashboard/address/delete/{address}`


<!-- END_160f2af70396f90cf114f8ae72df9d13 -->

<!-- START_b26bfc0cbd24d03f409e76aee11b682d -->
## dashboard/login
> Example request:

```bash
curl -X GET \
    -G "http://localhost/dashboard/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET dashboard/login`


<!-- END_b26bfc0cbd24d03f409e76aee11b682d -->

<!-- START_805947295b86bf13c635e55974c91671 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/login`


<!-- END_805947295b86bf13c635e55974c91671 -->

<!-- START_f4fbf16058b03a817ccc0abaa14f9464 -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST \
    "http://localhost/dashboard/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/dashboard/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST dashboard/logout`


<!-- END_f4fbf16058b03a817ccc0abaa14f9464 -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/home"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->



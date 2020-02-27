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
[Get Postman Collection](http://localhost:8000/docs/collection.json)

<!-- END_INFO -->

#Birthdate


APIs for friends birthdates
<!-- START_e3d1ac4ac8c50559f38932ac0136dc38 -->
## Create

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/v1/birthdate/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"explicabo","birth_date":"expedita"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/birthdate/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "explicabo",
    "birth_date": "expedita"
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
    -G "http://localhost:8000/api/v1/birthdate/list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/birthdate/list"
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
`GET api/v1/birthdate/list`


<!-- END_cd096f3453f8d2fda0bdf1140c7e9c0b -->

<!-- START_1b322eb4e959b303eed4e30960901084 -->
## Delete

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/v1/birthdate/delete/expedita" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/birthdate/delete/expedita"
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
    -G "http://localhost:8000/api/v1/card" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/card"
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
`GET api/v1/card`


<!-- END_4d5ff3c346776399721e510b66499c56 -->

#Gift Apis


APIs for management of the gift items
<!-- START_5989a901c62996199f8d4e236283cf13 -->
## Categories
get categories, name appear if it has at list one gift item

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/gift/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/gift/categories"
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
`GET api/v1/gift/categories`


<!-- END_5989a901c62996199f8d4e236283cf13 -->

<!-- START_c90d65f60a27955fe15c28471d562b5f -->
## Gifts
get gifts for specific category

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/gift/category/provident" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/gift/category/provident"
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
    -G "http://localhost:8000/api/v1/gift/top" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/gift/top"
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
`GET api/v1/gift/top`


<!-- END_2961af968c6f1c7abbe2057065a8330f -->

#Hotel Apis


APIs for hotel related things
<!-- START_1626898e456ebc2f3208f9036c240686 -->
## Hotel management for apis
get all locations with hotels and galleries

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/location/hotels" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/location/hotels"
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
`GET api/v1/location/hotels`


<!-- END_1626898e456ebc2f3208f9036c240686 -->

<!-- START_e9727db33275cd877c816381959eef59 -->
## Indoor Hotels
get all indoor type hotels

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/hotel/indoor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/hotel/indoor"
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
`GET api/v1/hotel/indoor`


<!-- END_e9727db33275cd877c816381959eef59 -->

<!-- START_a12eefc95453fc0f768f7f4505c70080 -->
## Outdoor Hotels
get all outdoor type hotels

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/hotel/outdoor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/hotel/outdoor"
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
`GET api/v1/hotel/outdoor`


<!-- END_a12eefc95453fc0f768f7f4505c70080 -->

<!-- START_7314c19487afed92d65c5fae42067e0f -->
## Single Hotel
Informations about single hotel

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/hotel/iusto" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/hotel/iusto"
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
    -G "http://localhost:8000/api/v1/hotel/menus/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"hotel_id":2}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/hotel/menus/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "hotel_id": 2
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
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
    -G "http://localhost:8000/api/v1/hotel/packages/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"hotel_id":8}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/hotel/packages/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "hotel_id": 8
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
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
    -G "http://localhost:8000/api/v1/hotel/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/hotel/posts"
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
`GET api/v1/hotel/posts`


<!-- END_0dea4acf799c0817beefb9a1c2248bf3 -->

<!-- START_1d44571845caf4e760deda54dc451d98 -->
## Like or dislike the hotel post

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/hotel/post/toggle-like/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":16}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/hotel/post/toggle-like/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 16
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
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
    "http://localhost:8000/api/v1/hotel/post/comment/delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"commnet_id":20}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/hotel/post/comment/delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "commnet_id": 20
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
    "http://localhost:8000/api/v1/hotel/post/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":12,"comment":"aliquid"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/hotel/post/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 12,
    "comment": "aliquid"
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
    -G "http://localhost:8000/api/v1/hotel/posts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"hotel_id":17}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/hotel/posts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "hotel_id": 17
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
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
    "http://localhost:8000/api/v1/hotel/post/comment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":17}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/hotel/post/comment/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 17
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

#Orders


APIs for orders
<!-- START_ae205eb63b24499b588ac55edb9c3feb -->
## Store

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/v1/hotel/place/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"hotel_id":9,"items":[],"amount":2}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/hotel/place/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "hotel_id": 9,
    "items": [],
    "amount": 2
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
    
<!-- END_ae205eb63b24499b588ac55edb9c3feb -->

#Stories

Story management api
<!-- START_5ca7c3273a6d9b865f3c1d1567fb0d65 -->
## Stories
get stories listing

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/stories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/stories"
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
`GET api/v1/stories`


<!-- END_5ca7c3273a6d9b865f3c1d1567fb0d65 -->

#User Management


APIs for managing users
<!-- START_8c0e48cd8efa861b308fc45872ff0837 -->
## Login user

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/v1/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"qui","password":"necessitatibus"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "qui",
    "password": "necessitatibus"
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
`POST api/v1/login`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `email` | string |  required  | email of user
        `password` | string |  required  | password of the user
    
<!-- END_8c0e48cd8efa861b308fc45872ff0837 -->

<!-- START_8ae5d428da27b2b014dc767c2f19a813 -->
## Create user

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/v1/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"eaque","mobile":"perspiciatis","dob":"nam","email":"perferendis","password":"sit","password_confirmation":"itaque","gender":"facilis","country":"quasi","works_at":"eius","bio":"et","image":"et"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "eaque",
    "mobile": "perspiciatis",
    "dob": "nam",
    "email": "perferendis",
    "password": "sit",
    "password_confirmation": "itaque",
    "gender": "facilis",
    "country": "quasi",
    "works_at": "eius",
    "bio": "et",
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
    "http://localhost:8000/api/v1/top-up" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"et"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/top-up"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "et"
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
    "http://localhost:8000/api/v1/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"aperiam","password":"voluptas","password_confirmation":"sit"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "aperiam",
    "password": "voluptas",
    "password_confirmation": "sit"
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
    -G "http://localhost:8000/api/v1/user/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/user/all"
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
    "http://localhost:8000/api/v1/user/profile/update/dolorem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"rerum","mobile":"rerum","dob":"magni","country":"et","image":"quod"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/user/profile/update/dolorem"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "rerum",
    "mobile": "rerum",
    "dob": "magni",
    "country": "et",
    "image": "quod"
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
    -G "http://localhost:8000/api/v1/user/profile/corrupti" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/user/profile/corrupti"
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
    -G "http://localhost:8000/api/v1/user/post/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/user/post/1"
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
    "http://localhost:8000/api/v1/user/post/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"est","images":[]}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/user/post/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "est",
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
    -G "http://localhost:8000/api/v1/user/post/comment/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/user/post/comment/ut"
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
    "http://localhost:8000/api/v1/user/post/comment/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_post_id":14,"comment":"aut"}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/user/post/comment/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_post_id": 14,
    "comment": "aut"
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
    -G "http://localhost:8000/api/v1/user/fetch/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/user/fetch/posts"
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
`GET api/v1/user/fetch/posts`


<!-- END_d7cf4563ab17484c7198d7bdc29e8584 -->

<!-- START_425250dfcffd4e4e89a515e1daaa71c8 -->
## Fetch unique posts
post with like and comment counts and comments

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/user/fetch/post/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":11}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/user/fetch/post/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 11
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
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
    -G "http://localhost:8000/api/v1/user/check/like/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":13}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/user/check/like/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 13
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
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
    -G "http://localhost:8000/api/v1/user/post/like/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":5}'

```

```javascript
const url = new URL(
    "http://localhost:8000/api/v1/user/post/like/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 5
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
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
    -G "http://localhost:8000/laravel-websockets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/laravel-websockets"
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
    -G "http://localhost:8000/laravel-websockets/api/1/statistics" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/laravel-websockets/api/1/statistics"
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
    "http://localhost:8000/laravel-websockets/auth" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/laravel-websockets/auth"
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
    "http://localhost:8000/laravel-websockets/event" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/laravel-websockets/event"
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
    "http://localhost:8000/laravel-websockets/statistics" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/laravel-websockets/statistics"
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
    -G "http://localhost:8000/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/oauth/authorize"
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
    "http://localhost:8000/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/oauth/authorize"
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
    "http://localhost:8000/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/oauth/authorize"
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
    "http://localhost:8000/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/oauth/token"
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
    -G "http://localhost:8000/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/oauth/tokens"
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
    "http://localhost:8000/oauth/tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/oauth/tokens/1"
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
    "http://localhost:8000/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/oauth/token/refresh"
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
    -G "http://localhost:8000/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/oauth/clients"
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
    "http://localhost:8000/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/oauth/clients"
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
    "http://localhost:8000/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/oauth/clients/1"
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
    "http://localhost:8000/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/oauth/clients/1"
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
    -G "http://localhost:8000/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/oauth/scopes"
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
    -G "http://localhost:8000/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/oauth/personal-access-tokens"
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
    "http://localhost:8000/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/oauth/personal-access-tokens"
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
    "http://localhost:8000/oauth/personal-access-tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/oauth/personal-access-tokens/1"
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
    -G "http://localhost:8000/dashboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard"
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
    -G "http://localhost:8000/dashboard/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/user"
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
    -G "http://localhost:8000/dashboard/user/edit/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/user/edit/1"
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
    "http://localhost:8000/dashboard/user/update/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/user/update/1"
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
    "http://localhost:8000/dashboard/user/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/user/delete/1"
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
    -G "http://localhost:8000/dashboard/user/update/permission" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/user/update/permission"
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
    -G "http://localhost:8000/dashboard/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/posts"
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
    -G "http://localhost:8000/dashboard/post/view/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/post/view/1"
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
    "http://localhost:8000/dashboard/post/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/post/delete/1"
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
    -G "http://localhost:8000/dashboard/hotel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/hotel"
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
    -G "http://localhost:8000/dashboard/hotel/create/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/hotel/create/"
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
    "http://localhost:8000/dashboard/hotel/store/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/hotel/store/"
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
    "http://localhost:8000/dashboard/hotel/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/hotel/delete/1"
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
    -G "http://localhost:8000/dashboard/hotel/gallery/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/hotel/gallery/1"
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
    "http://localhost:8000/dashboard/hotel/gallery/store/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/hotel/gallery/store/1"
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
    -G "http://localhost:8000/dashboard/hotel/gallery/delete/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/hotel/gallery/delete/"
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
    -G "http://localhost:8000/dashboard/hotel/manager/store/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/hotel/manager/store/1/1"
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
    -G "http://localhost:8000/dashboard/hotel/manager/delete/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/hotel/manager/delete/1/1"
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
    -G "http://localhost:8000/dashboard/hotel/show/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/hotel/show/1/"
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
    "http://localhost:8000/dashboard/hotel/create/post/store/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/hotel/create/post/store/1"
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
    "http://localhost:8000/dashboard/hotel/delete/post/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/hotel/delete/post/1"
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
    "http://localhost:8000/dashboard/hotel/menu/store/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/hotel/menu/store/1"
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
    "http://localhost:8000/dashboard/hotel/menu/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/hotel/menu/delete/1"
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
    "http://localhost:8000/dashboard/hotel/package/store/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/hotel/package/store/1"
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
    "http://localhost:8000/dashboard/hotel/package/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/hotel/package/delete/1"
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

<!-- START_63a6b4bd57d829d169e997345619e1f8 -->
## dashboard/gift
> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/dashboard/gift" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/gift"
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
    -G "http://localhost:8000/dashboard/gift/create/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/gift/create/"
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
    -G "http://localhost:8000/dashboard/gift/show/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/gift/show/1"
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
    -G "http://localhost:8000/dashboard/gift/edit/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/gift/edit/1"
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
    "http://localhost:8000/dashboard/gift/update/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/gift/update/1"
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
    -G "http://localhost:8000/dashboard/gift/toggle/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/gift/toggle/1"
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
    "http://localhost:8000/dashboard/gift/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/gift/store"
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
    "http://localhost:8000/dashboard/gift/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/gift/delete/1"
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
    -G "http://localhost:8000/dashboard/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/category"
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
    -G "http://localhost:8000/dashboard/category/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/category/create"
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
    "http://localhost:8000/dashboard/category/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/category/store"
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
    "http://localhost:8000/dashboard/category/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/category/delete/1"
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
    -G "http://localhost:8000/dashboard/story" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/story"
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
    -G "http://localhost:8000/dashboard/story/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/story/create"
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
    -G "http://localhost:8000/dashboard/story/show/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/story/show/1"
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
    "message": "No query results for model [App\\Models\\Story] 1"
}
```

### HTTP Request
`GET dashboard/story/show/{story}`


<!-- END_a363a402ab75e706de085f598cfef805 -->

<!-- START_ddb3b21a270199d073b626c16fe71d24 -->
## dashboard/story/store
> Example request:

```bash
curl -X POST \
    "http://localhost:8000/dashboard/story/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/story/store"
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
    "http://localhost:8000/dashboard/story/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/story/delete/1"
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
    -G "http://localhost:8000/dashboard/card" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/card"
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
    -G "http://localhost:8000/dashboard/card/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/card/create"
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
    "http://localhost:8000/dashboard/card/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/card/store"
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
    "http://localhost:8000/dashboard/card/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/card/delete/1"
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

<!-- START_f91ef88efd33cb52339ebe37f7606b19 -->
## dashboard/setting
> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/dashboard/setting" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/setting"
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
    "http://localhost:8000/dashboard/setting" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/setting"
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

<!-- START_93dc8769690b5f5555e43da4610f41ed -->
## dashboard/address/store
> Example request:

```bash
curl -X POST \
    "http://localhost:8000/dashboard/address/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/address/store"
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
    -G "http://localhost:8000/dashboard/address" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/address"
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
    -G "http://localhost:8000/dashboard/address/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/address/delete/1"
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
    "message": "No query results for model [App\\NoPermissionModels\\Address] 1"
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
    -G "http://localhost:8000/dashboard/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/login"
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
    "http://localhost:8000/dashboard/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/login"
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
    "http://localhost:8000/dashboard/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/dashboard/logout"
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
    -G "http://localhost:8000/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8000/home"
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



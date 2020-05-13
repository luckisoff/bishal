<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="/docs/css/style.css" />
    <script src="/docs/js/all.js"></script>


          <script>
        $(function() {
            setupLanguages(["bash","javascript"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="{{ route("apidoc", ["format" => ".json"]) }}">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>Birthdate</h1>
<p>APIs for friends birthdates</p>
<!-- START_e3d1ac4ac8c50559f38932ac0136dc38 -->
<h2>Create</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/birthdate/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"odit","birth_date":"commodi"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/birthdate/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "odit",
    "birth_date": "commodi"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/birthdate/store</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>required</td>
<td>full name of friend</td>
</tr>
<tr>
<td><code>birth_date</code></td>
<td>string</td>
<td>required</td>
<td>birthdate of the friend</td>
</tr>
</tbody>
</table>
<!-- END_e3d1ac4ac8c50559f38932ac0136dc38 -->
<!-- START_cd096f3453f8d2fda0bdf1140c7e9c0b -->
<h2>Get</h2>
<p>Get all your saved dates</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/birthdate/list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/birthdate/list</code></p>
<!-- END_cd096f3453f8d2fda0bdf1140c7e9c0b -->
<!-- START_1b322eb4e959b303eed4e30960901084 -->
<h2>Delete</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/v1/birthdate/delete/sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/birthdate/delete/sint"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/v1/birthdate/delete/{id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>id of the birthdate to be deleted</td>
</tr>
</tbody>
</table>
<!-- END_1b322eb4e959b303eed4e30960901084 -->
<h1>Cards</h1>
<p>APIs for cards</p>
<!-- START_4d5ff3c346776399721e510b66499c56 -->
<h2>Get</h2>
<p>Get the cards</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/card" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/card</code></p>
<!-- END_4d5ff3c346776399721e510b66499c56 -->
<h1>Events</h1>
<p>APIs for event</p>
<!-- START_9c9fa65f9a287d3c60b4d2a602b09fba -->
<h2>Get</h2>
<p>Get the events</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Event Listing",
    "code": 200,
    "events": []
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/events</code></p>
<!-- END_9c9fa65f9a287d3c60b4d2a602b09fba -->
<!-- START_151adf9c86ec12d203dcbb26c26b8bae -->
<h2>Get for Top</h2>
<p>Get the events</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/events/top" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Event Listing for top",
    "code": 200,
    "events": []
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/events/top</code></p>
<!-- END_151adf9c86ec12d203dcbb26c26b8bae -->
<h1>Feedback</h1>
<p>APIs for user feedback</p>
<!-- START_6df5eb4adf7b1eb97dd9f7290bacae6c -->
<h2>Create</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/user/feedback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"feedback":"omnis","rating":20}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/user/feedback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "feedback": "omnis",
    "rating": 20
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/user/feedback</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>feedback</code></td>
<td>string</td>
<td>required</td>
<td>feedback of user</td>
</tr>
<tr>
<td><code>rating</code></td>
<td>integer</td>
<td>optional</td>
<td>optional number of app rating by user default 0</td>
</tr>
</tbody>
</table>
<!-- END_6df5eb4adf7b1eb97dd9f7290bacae6c -->
<h1>Food Shop</h1>
<p>APIs for food shops</p>
<!-- START_4b8a71118700a5f1df5664c1e9725ed8 -->
<h2>Food Shop</h2>
<p>get all food shops</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/foodshop/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/foodshop/all</code></p>
<!-- END_4b8a71118700a5f1df5664c1e9725ed8 -->
<h1>Gift Apis</h1>
<p>APIs for management of the gift items</p>
<!-- START_5989a901c62996199f8d4e236283cf13 -->
<h2>Categories</h2>
<p>get categories, name appear if it has at list one gift item</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/gift/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/gift/categories</code></p>
<!-- END_5989a901c62996199f8d4e236283cf13 -->
<!-- START_c90d65f60a27955fe15c28471d562b5f -->
<h2>Gifts</h2>
<p>get gifts for specific category</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/gift/category/sit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/gift/category/sit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Category] sit"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/gift/category/{category}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>category</code></td>
<td>required</td>
<td>id integer of the category</td>
</tr>
</tbody>
</table>
<!-- END_c90d65f60a27955fe15c28471d562b5f -->
<!-- START_2961af968c6f1c7abbe2057065a8330f -->
<h2>Gifts For Top</h2>
<p>get gifts for top position</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/gift/top" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/gift/top</code></p>
<!-- END_2961af968c6f1c7abbe2057065a8330f -->
<h1>Gifts Orders</h1>
<p>APIs for event</p>
<!-- START_7550a46a51374c9b2ae6ee3f77627b3c -->
<h2>Gift Order placement</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/user/order/place" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"items":[],"deliver_address":"voluptatum","total_price":13}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/user/order/place"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "items": [],
    "deliver_address": "voluptatum",
    "total_price": 13
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/user/order/place</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>items</code></td>
<td>array</td>
<td>required</td>
<td>details of items ordered name,unit price, quantity etc</td>
</tr>
<tr>
<td><code>deliver_address</code></td>
<td>string</td>
<td>required</td>
<td>address of the users to be delivered</td>
</tr>
<tr>
<td><code>total_price</code></td>
<td>integer</td>
<td>required</td>
<td>total price of the order</td>
</tr>
</tbody>
</table>
<!-- END_7550a46a51374c9b2ae6ee3f77627b3c -->
<!-- START_a81c9239af8aef3a041ef682dbdbf5d8 -->
<h2>Get all users order</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/user/order/list" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/user/order/list</code></p>
<!-- END_a81c9239af8aef3a041ef682dbdbf5d8 -->
<h1>Hotel Apis</h1>
<p>APIs for hotel related things</p>
<!-- START_1626898e456ebc2f3208f9036c240686 -->
<h2>Hotel management for apis</h2>
<p>get all locations with hotels and galleries</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/location/hotels" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/location/hotels</code></p>
<!-- END_1626898e456ebc2f3208f9036c240686 -->
<!-- START_e9727db33275cd877c816381959eef59 -->
<h2>Indoor Hotels</h2>
<p>get all indoor type hotels</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/hotel/indoor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/hotel/indoor</code></p>
<!-- END_e9727db33275cd877c816381959eef59 -->
<!-- START_a12eefc95453fc0f768f7f4505c70080 -->
<h2>Outdoor Hotels</h2>
<p>get all outdoor type hotels</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/hotel/outdoor" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/hotel/outdoor</code></p>
<!-- END_a12eefc95453fc0f768f7f4505c70080 -->
<!-- START_7314c19487afed92d65c5fae42067e0f -->
<h2>Single Hotel</h2>
<p>Informations about single hotel</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/hotel/rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/hotel/rerum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Hotel Information",
    "code": 200,
    "hotel": []
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/hotel/{id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>integer type id of the hotel</td>
</tr>
</tbody>
</table>
<!-- END_7314c19487afed92d65c5fae42067e0f -->
<h1>Hotel Menus</h1>
<p>APIs for hotel menus</p>
<!-- START_b32e0f9e7a93c320e9d11adfd854a511 -->
<h2>Menus</h2>
<p>get all menus for related hotel</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/hotel/menus/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"hotel_id":6}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "status": false,
    "code": 404,
    "message": "No menus are available"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/hotel/menus/{hotel_id}</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>hotel_id</code></td>
<td>integer</td>
<td>required</td>
<td>hotel id for the menus of hotels</td>
</tr>
</tbody>
</table>
<!-- END_b32e0f9e7a93c320e9d11adfd854a511 -->
<!-- START_a6fb471b9f4d0a991551d6b08de76db9 -->
<h2>Packages</h2>
<p>get all package for related hotel</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/hotel/packages/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"hotel_id":12}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/hotel/packages/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "hotel_id": 12
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "status": false,
    "code": 404,
    "message": "No menus are available"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/hotel/packages/{hotel_id}</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>hotel_id</code></td>
<td>integer</td>
<td>required</td>
<td>hotel id for the packages of hotel</td>
</tr>
</tbody>
</table>
<!-- END_a6fb471b9f4d0a991551d6b08de76db9 -->
<h1>Hotel post like api</h1>
<p>APIs for managing users post like and comment</p>
<!-- START_0dea4acf799c0817beefb9a1c2248bf3 -->
<h2>Hotel posts listing</h2>
<p>get hotel post with hotel</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/hotel/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/hotel/posts</code></p>
<!-- END_0dea4acf799c0817beefb9a1c2248bf3 -->
<!-- START_1d44571845caf4e760deda54dc451d98 -->
<h2>Like or dislike the hotel post</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/hotel/post/toggle-like/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":19}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/hotel/post/toggle-like/1"
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/hotel/post/toggle-like/{post_id}</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>post_id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the hotel post to be liked or disliked</td>
</tr>
</tbody>
</table>
<!-- END_1d44571845caf4e760deda54dc451d98 -->
<!-- START_f021d6ef4b780e9afa4ea9e684080112 -->
<h2>Delete hotel comment</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/hotel/post/comment/delete" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"commnet_id":2}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/hotel/post/comment/delete"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "commnet_id": 2
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/hotel/post/comment/delete</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>commnet_id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the hotel post to be deleted</td>
</tr>
</tbody>
</table>
<!-- END_f021d6ef4b780e9afa4ea9e684080112 -->
<!-- START_05b5c5b75f4019be01ae86341eccb5f9 -->
<h2>Create hotel post comment</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/hotel/post/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":9,"comment":"dolorum"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/hotel/post/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 9,
    "comment": "dolorum"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/hotel/post/comment</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>post_id</code></td>
<td>integer</td>
<td>required</td>
<td>current hotel post id to be commented</td>
</tr>
<tr>
<td><code>comment</code></td>
<td>string</td>
<td>required</td>
<td>comment text</td>
</tr>
</tbody>
</table>
<!-- END_05b5c5b75f4019be01ae86341eccb5f9 -->
<!-- START_446059d96acbf53bb974b6ba1870d2f7 -->
<h2>Get all hotel posts</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/hotel/posts/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"hotel_id":1}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/hotel/posts/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "hotel_id": 1
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/hotel/posts/{hotel_id}</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>hotel_id</code></td>
<td>integer</td>
<td>required</td>
<td>hotel id of the hotel</td>
</tr>
</tbody>
</table>
<!-- END_446059d96acbf53bb974b6ba1870d2f7 -->
<!-- START_8a3359a30f4ad8e585997556feaa5247 -->
<h2>Get hotel post comments</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/hotel/post/comment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":11}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/hotel/post/comment/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 11
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/hotel/post/comment/{post_id}</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>post_id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the hotel post</td>
</tr>
</tbody>
</table>
<!-- END_8a3359a30f4ad8e585997556feaa5247 -->
<h1>House Party</h1>
<p>APIs for house party</p>
<!-- START_65e8e9c65fb82d8bcd975c1107e66e33 -->
<h2>House Party</h2>
<p>get all house parties</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/houseparty/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/houseparty/all</code></p>
<!-- END_65e8e9c65fb82d8bcd975c1107e66e33 -->
<h1>News</h1>
<p>APIs for managing news</p>
<!-- START_eff3de500a74b38af2f02b1ee79df2db -->
<h2>Get</h2>
<p>Get all news items</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/news</code></p>
<!-- END_eff3de500a74b38af2f02b1ee79df2db -->
<h1>Orders</h1>
<p>APIs for orders</p>
<!-- START_ae205eb63b24499b588ac55edb9c3feb -->
<h2>Store</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/hotel/place/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"hotel_id":19,"items":[],"amount":7,"note":"voluptas"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/hotel/place/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "hotel_id": 19,
    "items": [],
    "amount": 7,
    "note": "voluptas"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/hotel/place/order</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>hotel_id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the hotel for order</td>
</tr>
<tr>
<td><code>items</code></td>
<td>array</td>
<td>required</td>
<td>items array</td>
</tr>
<tr>
<td><code>amount</code></td>
<td>integer</td>
<td>required</td>
<td>total order amount of the user</td>
</tr>
<tr>
<td><code>note</code></td>
<td>string</td>
<td>required</td>
<td>note from the users</td>
</tr>
</tbody>
</table>
<!-- END_ae205eb63b24499b588ac55edb9c3feb -->
<!-- START_ad10946f4e0323ab382be6de5a418fc6 -->
<h2>Confirm</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/hotel/confirm/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"order_id":15,"message":"in"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/hotel/confirm/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "order_id": 15,
    "message": "in"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/hotel/confirm/order</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>order_id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the order to be confirmed</td>
</tr>
<tr>
<td><code>message</code></td>
<td>string</td>
<td>required</td>
<td>message to be sent to the user</td>
</tr>
</tbody>
</table>
<!-- END_ad10946f4e0323ab382be6de5a418fc6 -->
<!-- START_7280de98e904900ee2a06ec0d81125bf -->
<h2>User Orders</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/hotel/orders/user/quia" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/hotel/orders/user/quia"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/hotel/orders/user/{user_id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>user_id</code></td>
<td>required</td>
<td>id of the user for orders</td>
</tr>
</tbody>
</table>
<!-- END_7280de98e904900ee2a06ec0d81125bf -->
<!-- START_40912249e4a7a63afdf9b3d2a3cf971f -->
<h2>Get</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/hotel/orders/rerum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/hotel/orders/rerum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/hotel/orders/{hotel_id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>hotel_id</code></td>
<td>required</td>
<td>id of the hotel for orders</td>
</tr>
</tbody>
</table>
<!-- END_40912249e4a7a63afdf9b3d2a3cf971f -->
<h1>Search</h1>
<p>APIs for searching</p>
<!-- START_22eb39b601477715cdcfe164f37d634b -->
<h2>User</h2>
<p>Get users</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/search/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"string":"repellat"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/search/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "string": "repellat"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/search/user</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>string</code></td>
<td>string</td>
<td>required</td>
<td>search string for user</td>
</tr>
</tbody>
</table>
<!-- END_22eb39b601477715cdcfe164f37d634b -->
<!-- START_9f5c7c23592dc425fbc1ccbba19fc723 -->
<h2>Hotel</h2>
<p>Get Hotels</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/search/hotel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"string":"cum"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/search/hotel"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "string": "cum"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/search/hotel</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>string</code></td>
<td>string</td>
<td>required</td>
<td>search string for hotels</td>
</tr>
</tbody>
</table>
<!-- END_9f5c7c23592dc425fbc1ccbba19fc723 -->
<h1>Stories</h1>
<p>Story management api</p>
<!-- START_5ca7c3273a6d9b865f3c1d1567fb0d65 -->
<h2>Stories</h2>
<p>get stories listing</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/stories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/stories</code></p>
<!-- END_5ca7c3273a6d9b865f3c1d1567fb0d65 -->
<h1>User Management</h1>
<p>APIs for managing users</p>
<!-- START_25734369e5f518a944715ea20987786e -->
<h2>Login user</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/login/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"ut","password":"quo","type":"ea"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/login/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "ut",
    "password": "quo",
    "type": "ea"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/login/{type?}</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
<td>email of user</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
<td>password of the user</td>
</tr>
<tr>
<td><code>type</code></td>
<td>string</td>
<td>optional</td>
<td>optional type of user eg. manager</td>
</tr>
</tbody>
</table>
<!-- END_25734369e5f518a944715ea20987786e -->
<!-- START_8ae5d428da27b2b014dc767c2f19a813 -->
<h2>Create user</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"dignissimos","mobile":"delectus","dob":"autem","email":"laboriosam","password":"ad","password_confirmation":"et","gender":"nisi","country":"recusandae","works_at":"officia","bio":"id","image":"at"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "dignissimos",
    "mobile": "delectus",
    "dob": "autem",
    "email": "laboriosam",
    "password": "ad",
    "password_confirmation": "et",
    "gender": "nisi",
    "country": "recusandae",
    "works_at": "officia",
    "bio": "id",
    "image": "at"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/register</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>required</td>
<td>full name of user</td>
</tr>
<tr>
<td><code>mobile</code></td>
<td>string</td>
<td>required</td>
<td>a unique 10 digits mobile number of user</td>
</tr>
<tr>
<td><code>dob</code></td>
<td>string</td>
<td>required</td>
<td>date of birth of user</td>
</tr>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
<td>unique user of email</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
<td>password for user min charecters 8</td>
</tr>
<tr>
<td><code>password_confirmation</code></td>
<td>string</td>
<td>required</td>
<td>password confirmation</td>
</tr>
<tr>
<td><code>gender</code></td>
<td>string</td>
<td>optional</td>
<td>optional default gender is Male</td>
</tr>
<tr>
<td><code>country</code></td>
<td>string</td>
<td>optional</td>
<td>optional country of user optional parameter</td>
</tr>
<tr>
<td><code>works_at</code></td>
<td>string</td>
<td>optional</td>
<td>optional place the user is working now</td>
</tr>
<tr>
<td><code>bio</code></td>
<td>text</td>
<td>optional</td>
<td>optional bio of the user</td>
</tr>
<tr>
<td><code>image</code></td>
<td>image</td>
<td>optional</td>
<td>optional country of user optional parameter</td>
</tr>
</tbody>
</table>
<!-- END_8ae5d428da27b2b014dc767c2f19a813 -->
<!-- START_f5f84a10a515cff0c79b41e6834dc92c -->
<h2>Send top up to reset password</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/top-up" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"ratione"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/top-up"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "ratione"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/top-up</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
<td>email of user</td>
</tr>
</tbody>
</table>
<!-- END_f5f84a10a515cff0c79b41e6834dc92c -->
<!-- START_a62f1703e9fba891a3e20ff27854aac0 -->
<h2>Send top up to reset password</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"blanditiis","password":"culpa","password_confirmation":"repellendus"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "blanditiis",
    "password": "culpa",
    "password_confirmation": "repellendus"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/password/reset</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>required</td>
<td>email of user</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>required</td>
<td>password min 8 character</td>
</tr>
<tr>
<td><code>password_confirmation</code></td>
<td>string</td>
<td>required</td>
<td>password min 8 character</td>
</tr>
</tbody>
</table>
<!-- END_a62f1703e9fba891a3e20ff27854aac0 -->
<!-- START_327d9a608d175131d3fc458a600118c7 -->
<h2>Get All Users</h2>
<p>Get the list of all users</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/user/all" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/user/all</code></p>
<!-- END_327d9a608d175131d3fc458a600118c7 -->
<!-- START_9b9d20d78c8fba46beee7b1e94b178c5 -->
<h2>Update profile</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/user/profile/update/est" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"omnis","mobile":"qui","dob":"fugit","country":"quibusdam","image":"ut"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/user/profile/update/est"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "omnis",
    "mobile": "qui",
    "dob": "fugit",
    "country": "quibusdam",
    "image": "ut"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/user/profile/update/{user_id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>user_id</code></td>
<td>required</td>
<td>user id to update the user</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>optional</td>
<td>optional full name of user</td>
</tr>
<tr>
<td><code>mobile</code></td>
<td>string</td>
<td>optional</td>
<td>optional a unique 10 digits mobile number of user</td>
</tr>
<tr>
<td><code>dob</code></td>
<td>string</td>
<td>optional</td>
<td>optional date of birth of user</td>
</tr>
<tr>
<td><code>country</code></td>
<td>string</td>
<td>optional</td>
<td>optional country of user optional parameter</td>
</tr>
<tr>
<td><code>image</code></td>
<td>optional</td>
<td>optional</td>
<td>image of the user</td>
</tr>
</tbody>
</table>
<!-- END_9b9d20d78c8fba46beee7b1e94b178c5 -->
<!-- START_0cea91d108e05e66f52b02a4994c8d2e -->
<h2>Profile Detail</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/user/profile/facilis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/user/profile/facilis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/user/profile/{user_id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>user_id</code></td>
<td>required</td>
<td>user id for profile detail</td>
</tr>
</tbody>
</table>
<!-- END_0cea91d108e05e66f52b02a4994c8d2e -->
<h1>User Post Management</h1>
<p>APIs for managing users post</p>
<!-- START_02f7b68b4437149e748b91176f2bf15c -->
<h2>Posts of Single user</h2>
<p>post with like and comment counts and comments</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/user/post/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/user/post/{user_id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>user id for the posts</td>
</tr>
</tbody>
</table>
<!-- END_02f7b68b4437149e748b91176f2bf15c -->
<!-- START_f4e3e8657ad3b65db645337fe9d30393 -->
<h2>Create user post</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/user/post/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"quod","images":[]}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/user/post/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "quod",
    "images": []
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/user/post/store</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>title</code></td>
<td>string</td>
<td>required</td>
<td>title of the post or description</td>
</tr>
<tr>
<td><code>images</code></td>
<td>array</td>
<td>required</td>
<td>array of the images max 5</td>
</tr>
</tbody>
</table>
<!-- END_f4e3e8657ad3b65db645337fe9d30393 -->
<!-- START_224af1a0bc472cda87d49208306e165c -->
<h2>Comments of Post</h2>
<p>Comments of User post</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/user/post/comment/aliquam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/user/post/comment/aliquam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/user/post/comment/{post_id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>post_id</code></td>
<td>required</td>
<td>post id of the post</td>
</tr>
</tbody>
</table>
<!-- END_224af1a0bc472cda87d49208306e165c -->
<!-- START_a691e091f03a6923a0603c6589c006c9 -->
<h2>Create post comment</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/v1/user/post/comment/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"user_post_id":19,"comment":"sed"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/user/post/comment/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_post_id": 19,
    "comment": "sed"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/v1/user/post/comment/store</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>user_post_id</code></td>
<td>integer</td>
<td>required</td>
<td>current post id to be commented</td>
</tr>
<tr>
<td><code>comment</code></td>
<td>string</td>
<td>required</td>
<td>comment text</td>
</tr>
</tbody>
</table>
<!-- END_a691e091f03a6923a0603c6589c006c9 -->
<!-- START_d7cf4563ab17484c7198d7bdc29e8584 -->
<h2>Fetch all posts</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/user/fetch/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/user/fetch/posts</code></p>
<!-- END_d7cf4563ab17484c7198d7bdc29e8584 -->
<!-- START_425250dfcffd4e4e89a515e1daaa71c8 -->
<h2>Fetch unique posts</h2>
<p>post with like and comment counts and comments</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/user/fetch/post/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":12}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/user/fetch/post/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 12
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/user/fetch/post/{id}</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>integer</td>
<td>required</td>
<td>post id to get post with comments</td>
</tr>
</tbody>
</table>
<!-- END_425250dfcffd4e4e89a515e1daaa71c8 -->
<h1>User post like api</h1>
<p>APIs for managing users post liked</p>
<!-- START_a8ba2df90c241c559b860e7dd0d171b8 -->
<h2>Check if user has liked the post</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/user/check/like/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":7}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/user/check/like/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 7
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/user/check/like/{post_id}</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>post_id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the post to check if user has liked the post or not</td>
</tr>
</tbody>
</table>
<!-- END_a8ba2df90c241c559b860e7dd0d171b8 -->
<!-- START_21c3a7399d059d7d5f17949daaa00d48 -->
<h2>Like or dislike the user post</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/v1/user/post/like/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"post_id":10}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/user/post/like/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 10
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/v1/user/post/like/{post_id}</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>post_id</code></td>
<td>integer</td>
<td>required</td>
<td>id of the post to be liked or disliked</td>
</tr>
</tbody>
</table>
<!-- END_21c3a7399d059d7d5f17949daaa00d48 -->
<h1>general</h1>
<!-- START_ffeb21a323d661b8d5ed8072620cc36e -->
<h2>laravel-websockets</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/laravel-websockets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET laravel-websockets</code></p>
<!-- END_ffeb21a323d661b8d5ed8072620cc36e -->
<!-- START_7a96267d047ecbef5cd21c3dd1691fe0 -->
<h2>laravel-websockets/api/{appId}/statistics</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/laravel-websockets/api/1/statistics" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET laravel-websockets/api/{appId}/statistics</code></p>
<!-- END_7a96267d047ecbef5cd21c3dd1691fe0 -->
<!-- START_69dd61efc04363546d99d1d7cba7bf4c -->
<h2>laravel-websockets/auth</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/laravel-websockets/auth" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST laravel-websockets/auth</code></p>
<!-- END_69dd61efc04363546d99d1d7cba7bf4c -->
<!-- START_5f593177feb1276b604ea7c2cec73a03 -->
<h2>laravel-websockets/event</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/laravel-websockets/event" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST laravel-websockets/event</code></p>
<!-- END_5f593177feb1276b604ea7c2cec73a03 -->
<!-- START_a114cbb106b4fbbabe00910c4c3fa19c -->
<h2>laravel-websockets/statistics</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/laravel-websockets/statistics" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST laravel-websockets/statistics</code></p>
<!-- END_a114cbb106b4fbbabe00910c4c3fa19c -->
<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
<h2>Authorize a client to access the user&#039;s account.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET oauth/authorize</code></p>
<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->
<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
<h2>Approve the authorization request.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST oauth/authorize</code></p>
<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->
<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
<h2>Deny the authorization request.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE oauth/authorize</code></p>
<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->
<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
<h2>Authorize a client to access the user&#039;s account.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST oauth/token</code></p>
<!-- END_a09d20357336aa979ecd8e3972ac9168 -->
<!-- START_d6a56149547e03307199e39e03e12d1c -->
<h2>Get all of the authorized tokens for the authenticated user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET oauth/tokens</code></p>
<!-- END_d6a56149547e03307199e39e03e12d1c -->
<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
<h2>Delete the given token.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/oauth/tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE oauth/tokens/{token_id}</code></p>
<!-- END_a9a802c25737cca5324125e5f60b72a5 -->
<!-- START_abe905e69f5d002aa7d26f433676d623 -->
<h2>Get a fresh transient token cookie for the authenticated user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST oauth/token/refresh</code></p>
<!-- END_abe905e69f5d002aa7d26f433676d623 -->
<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
<h2>Get all of the clients for the authenticated user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET oauth/clients</code></p>
<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->
<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
<h2>Store a new client.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST oauth/clients</code></p>
<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->
<!-- START_784aec390a455073fc7464335c1defa1 -->
<h2>Update the given client.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT oauth/clients/{client_id}</code></p>
<!-- END_784aec390a455073fc7464335c1defa1 -->
<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
<h2>Delete the given client.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE oauth/clients/{client_id}</code></p>
<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->
<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
<h2>Get all of the available scopes for the application.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET oauth/scopes</code></p>
<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->
<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
<h2>Get all of the personal access tokens for the authenticated user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET oauth/personal-access-tokens</code></p>
<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->
<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
<h2>Create a new personal access token for the user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST oauth/personal-access-tokens</code></p>
<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->
<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
<h2>Delete the given token.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/oauth/personal-access-tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE oauth/personal-access-tokens/{token_id}</code></p>
<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->
<!-- START_30059a09ef3f0284c40e4d06962ce08d -->
<h2>dashboard</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard</code></p>
<!-- END_30059a09ef3f0284c40e4d06962ce08d -->
<!-- START_d0011eccd4530617608bac7a4faabb54 -->
<h2>dashboard/user</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/user</code></p>
<!-- END_d0011eccd4530617608bac7a4faabb54 -->
<!-- START_dc15b897966f84f1f7fecd9ab67b64bf -->
<h2>dashboard/user/edit/{user}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/user/edit/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/user/edit/{user}</code></p>
<!-- END_dc15b897966f84f1f7fecd9ab67b64bf -->
<!-- START_8bb38c625bcc37af2f7112844d6b3553 -->
<h2>dashboard/user/update/{user}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/user/update/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/user/update/{user}</code></p>
<!-- END_8bb38c625bcc37af2f7112844d6b3553 -->
<!-- START_e453eb06eb7e2ed65a1482e9f62586f1 -->
<h2>dashboard/user/delete/{user}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/user/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/user/delete/{user}</code></p>
<!-- END_e453eb06eb7e2ed65a1482e9f62586f1 -->
<!-- START_bc9275eb7f241b08e47127fed622e4d7 -->
<h2>dashboard/user/update/permission</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/user/update/permission" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/user/update/permission</code></p>
<!-- END_bc9275eb7f241b08e47127fed622e4d7 -->
<!-- START_cb8a26b7a56e86cdac559c9bde37741f -->
<h2>dashboard/posts</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/posts" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/posts</code></p>
<!-- END_cb8a26b7a56e86cdac559c9bde37741f -->
<!-- START_48673514ed027cd8dd95687774c149a9 -->
<h2>dashboard/post/view/{post}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/post/view/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\UserPost] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/post/view/{post}</code></p>
<!-- END_48673514ed027cd8dd95687774c149a9 -->
<!-- START_104484665103287ee00e412e1e120554 -->
<h2>dashboard/post/delete/{post}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/post/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/post/delete/{post}</code></p>
<!-- END_104484665103287ee00e412e1e120554 -->
<!-- START_36b961c9c7efe06a85f136c9a4f1a137 -->
<h2>dashboard/hotel</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/hotel" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/hotel</code></p>
<!-- END_36b961c9c7efe06a85f136c9a4f1a137 -->
<!-- START_21c71a2d68eb7dbf46721d82e59039e2 -->
<h2>dashboard/hotel/create/{id?}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/hotel/create/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/hotel/create/{id?}</code></p>
<!-- END_21c71a2d68eb7dbf46721d82e59039e2 -->
<!-- START_daeb0af948dfbb8f7c88026ecd4dd79c -->
<h2>dashboard/hotel/store/{id?}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/hotel/store/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/hotel/store/{id?}</code></p>
<!-- END_daeb0af948dfbb8f7c88026ecd4dd79c -->
<!-- START_0a077f15e58b7be46b690e7e1d84c10f -->
<h2>dashboard/hotel/delete/{id}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/hotel/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/hotel/delete/{id}</code></p>
<!-- END_0a077f15e58b7be46b690e7e1d84c10f -->
<!-- START_37464b3971972f63e8a847946398215e -->
<h2>dashboard/hotel/gallery/{hotel}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/hotel/gallery/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Hotel] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/hotel/gallery/{hotel}</code></p>
<!-- END_37464b3971972f63e8a847946398215e -->
<!-- START_c8b7e2a51013cc9a23501741586dd2fd -->
<h2>dashboard/hotel/gallery/store/{hotel}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/hotel/gallery/store/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/hotel/gallery/store/{hotel}</code></p>
<!-- END_c8b7e2a51013cc9a23501741586dd2fd -->
<!-- START_1ded33a1e83d1c32117b59d192258a78 -->
<h2>dashboard/hotel/gallery/delete/{gallery?}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/hotel/gallery/delete/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Hotel] delete"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/hotel/gallery/delete/{gallery?}</code></p>
<!-- END_1ded33a1e83d1c32117b59d192258a78 -->
<!-- START_2ea29a41c5ba4a4715a79bf4fda288dd -->
<h2>dashboard/hotel/manager/store/{user}/{hotel}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/hotel/manager/store/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Hotel] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/hotel/manager/store/{user}/{hotel}</code></p>
<!-- END_2ea29a41c5ba4a4715a79bf4fda288dd -->
<!-- START_7500701fb400e5a680115707b7307502 -->
<h2>dashboard/hotel/manager/delete/{user}/{hotel}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/hotel/manager/delete/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Hotel] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/hotel/manager/delete/{user}/{hotel}</code></p>
<!-- END_7500701fb400e5a680115707b7307502 -->
<!-- START_01b1b798af99e4181cd144cf27cec128 -->
<h2>dashboard/hotel/show/{hotel}/{page?}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/hotel/show/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Hotel] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/hotel/show/{hotel}/{page?}</code></p>
<!-- END_01b1b798af99e4181cd144cf27cec128 -->
<!-- START_69ee1c291f50238782f03044ddff7908 -->
<h2>dashboard/hotel/create/post/store/{hotel}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/hotel/create/post/store/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/hotel/create/post/store/{hotel}</code></p>
<!-- END_69ee1c291f50238782f03044ddff7908 -->
<!-- START_f1a258b3d9a0c188caae9cd6e81e0231 -->
<h2>dashboard/hotel/delete/post/{post}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/hotel/delete/post/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/hotel/delete/post/{post}</code></p>
<!-- END_f1a258b3d9a0c188caae9cd6e81e0231 -->
<!-- START_6faa0023583836a33a949d2268cb7629 -->
<h2>dashboard/hotel/menu/store/{hotel}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/hotel/menu/store/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/hotel/menu/store/{hotel}</code></p>
<!-- END_6faa0023583836a33a949d2268cb7629 -->
<!-- START_17759fa6a01d68f4c2a79a1cb27b41b1 -->
<h2>dashboard/hotel/menu/delete/{menu}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/hotel/menu/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/hotel/menu/delete/{menu}</code></p>
<!-- END_17759fa6a01d68f4c2a79a1cb27b41b1 -->
<!-- START_b72953808830a6bc0b511490d6b968e4 -->
<h2>dashboard/hotel/package/store/{hotel}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/hotel/package/store/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/hotel/package/store/{hotel}</code></p>
<!-- END_b72953808830a6bc0b511490d6b968e4 -->
<!-- START_5ddc6e6c3e98a85ad662c198faa7ed84 -->
<h2>dashboard/hotel/package/delete/{package}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/hotel/package/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/hotel/package/delete/{package}</code></p>
<!-- END_5ddc6e6c3e98a85ad662c198faa7ed84 -->
<!-- START_84d5bd34721000f5e7c9e3a25786a4ae -->
<h2>dashboard/hotel/order/confirm/{order}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/hotel/order/confirm/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Order] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/hotel/order/confirm/{order}</code></p>
<!-- END_84d5bd34721000f5e7c9e3a25786a4ae -->
<!-- START_8b33021095ab020b4584985a3d47c2c1 -->
<h2>dashboard/hotel/order/dispatch/{order}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/hotel/order/dispatch/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Order] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/hotel/order/dispatch/{order}</code></p>
<!-- END_8b33021095ab020b4584985a3d47c2c1 -->
<!-- START_420e3743b9ebbb8c19e953dbc354202f -->
<h2>dashboard/hotel/order/success/{order}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/hotel/order/success/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Order] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/hotel/order/success/{order}</code></p>
<!-- END_420e3743b9ebbb8c19e953dbc354202f -->
<!-- START_9d8aa977f729143e25d14d02252b199e -->
<h2>dashboard/hotel/order/invoice/{order}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/hotel/order/invoice/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Order] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/hotel/order/invoice/{order}</code></p>
<!-- END_9d8aa977f729143e25d14d02252b199e -->
<!-- START_63a6b4bd57d829d169e997345619e1f8 -->
<h2>dashboard/gift</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/gift" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/gift</code></p>
<!-- END_63a6b4bd57d829d169e997345619e1f8 -->
<!-- START_8eb772ca860ebd59ea0442fa250307b4 -->
<h2>dashboard/gift/create/{category?}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/gift/create/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/gift/create/{category?}</code></p>
<!-- END_8eb772ca860ebd59ea0442fa250307b4 -->
<!-- START_6ea970c75a0e45a7f20deb285c7e8d0f -->
<h2>dashboard/gift/show/{gift}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/gift/show/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Gift] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/gift/show/{gift}</code></p>
<!-- END_6ea970c75a0e45a7f20deb285c7e8d0f -->
<!-- START_f28d3732082d8ad912226e5d7bc02e0c -->
<h2>dashboard/gift/edit/{gift}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/gift/edit/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Gift] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/gift/edit/{gift}</code></p>
<!-- END_f28d3732082d8ad912226e5d7bc02e0c -->
<!-- START_23f0b32b1a23a3af4e319ecb9e91f5d3 -->
<h2>dashboard/gift/update/{gift}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/gift/update/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/gift/update/{gift}</code></p>
<!-- END_23f0b32b1a23a3af4e319ecb9e91f5d3 -->
<!-- START_033bd30cc3b5d5bf5d7657dc1fc64bc6 -->
<h2>dashboard/gift/toggle/{gift}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/gift/toggle/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Gift] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/gift/toggle/{gift}</code></p>
<!-- END_033bd30cc3b5d5bf5d7657dc1fc64bc6 -->
<!-- START_2c7c77d0bbaa4157a50915524025c45e -->
<h2>dashboard/gift/store</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/gift/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/gift/store</code></p>
<!-- END_2c7c77d0bbaa4157a50915524025c45e -->
<!-- START_13a8bc44477439d4f0195c8c3172672a -->
<h2>dashboard/gift/delete/{gift}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/gift/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/gift/delete/{gift}</code></p>
<!-- END_13a8bc44477439d4f0195c8c3172672a -->
<!-- START_cd0aca5fc64fd96d60e1d64e9c853e9e -->
<h2>dashboard/category</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/category</code></p>
<!-- END_cd0aca5fc64fd96d60e1d64e9c853e9e -->
<!-- START_5ae793941d16130cdef5566cceb13d97 -->
<h2>dashboard/category/create</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/category/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/category/create</code></p>
<!-- END_5ae793941d16130cdef5566cceb13d97 -->
<!-- START_d57b991abb696ec3f1f53a745a462836 -->
<h2>dashboard/category/store</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/category/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/category/store</code></p>
<!-- END_d57b991abb696ec3f1f53a745a462836 -->
<!-- START_e1dbe827b11a29b8d25f9a4bf7b0fafa -->
<h2>dashboard/category/delete/{category}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/category/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/category/delete/{category}</code></p>
<!-- END_e1dbe827b11a29b8d25f9a4bf7b0fafa -->
<!-- START_32d2dd2626606ab5bc194174ff656491 -->
<h2>dashboard/story</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/story" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/story</code></p>
<!-- END_32d2dd2626606ab5bc194174ff656491 -->
<!-- START_f49572d3f95001fdef9d97e28a2209e2 -->
<h2>dashboard/story/create</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/story/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/story/create</code></p>
<!-- END_f49572d3f95001fdef9d97e28a2209e2 -->
<!-- START_a363a402ab75e706de085f598cfef805 -->
<h2>dashboard/story/show/{story}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/story/show/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/story/show/{story}</code></p>
<!-- END_a363a402ab75e706de085f598cfef805 -->
<!-- START_ddb3b21a270199d073b626c16fe71d24 -->
<h2>dashboard/story/store</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/story/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/story/store</code></p>
<!-- END_ddb3b21a270199d073b626c16fe71d24 -->
<!-- START_d44bad8f3739fa004c09e2ac29279c20 -->
<h2>dashboard/story/delete/{story}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/story/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/story/delete/{story}</code></p>
<!-- END_d44bad8f3739fa004c09e2ac29279c20 -->
<!-- START_fe832e13697cc9b92e02b927c9465d20 -->
<h2>dashboard/card</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/card" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/card</code></p>
<!-- END_fe832e13697cc9b92e02b927c9465d20 -->
<!-- START_4716f4dfa184df84e7209e029b068a9e -->
<h2>dashboard/card/create</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/card/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/card/create</code></p>
<!-- END_4716f4dfa184df84e7209e029b068a9e -->
<!-- START_27b79979a04c59eefd22412425391bfa -->
<h2>dashboard/card/store</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/card/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/card/store</code></p>
<!-- END_27b79979a04c59eefd22412425391bfa -->
<!-- START_3d24a97cae7b410f6ce6d4aa1ec1732a -->
<h2>dashboard/card/delete/{card}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/card/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/card/delete/{card}</code></p>
<!-- END_3d24a97cae7b410f6ce6d4aa1ec1732a -->
<!-- START_79f8c409e3c7ce2190af0378bc7c8823 -->
<h2>dashboard/news</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/news" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/news</code></p>
<!-- END_79f8c409e3c7ce2190af0378bc7c8823 -->
<!-- START_13584fd2bf0a38314fd037134dba471c -->
<h2>dashboard/news/create</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/news/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/news/create</code></p>
<!-- END_13584fd2bf0a38314fd037134dba471c -->
<!-- START_f788a1e95dfbca80ad452a933d2845dc -->
<h2>dashboard/news/store</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/news/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/news/store</code></p>
<!-- END_f788a1e95dfbca80ad452a933d2845dc -->
<!-- START_cace133be5dd95009234257286c976d0 -->
<h2>dashboard/news/delete/{news}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/news/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/news/delete/{news}</code></p>
<!-- END_cace133be5dd95009234257286c976d0 -->
<!-- START_8720cd6f209ad7c3aea8c3c21d6c2c16 -->
<h2>dashboard/news/show/{news}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/news/show/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\News] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/news/show/{news}</code></p>
<!-- END_8720cd6f209ad7c3aea8c3c21d6c2c16 -->
<!-- START_a38ed043c6b3fa3c4d2e55cff6fc100e -->
<h2>dashboard/news/edit/{news}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/news/edit/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\News] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/news/edit/{news}</code></p>
<!-- END_a38ed043c6b3fa3c4d2e55cff6fc100e -->
<!-- START_aaff640bf5d32b656a1e6caff7becff7 -->
<h2>dashboard/events</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/events" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/events</code></p>
<!-- END_aaff640bf5d32b656a1e6caff7becff7 -->
<!-- START_96aa1298543257d34ce9380a1bce7a48 -->
<h2>dashboard/events/create</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/events/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/events/create</code></p>
<!-- END_96aa1298543257d34ce9380a1bce7a48 -->
<!-- START_02ddf95014c3eb621c3934b9220965be -->
<h2>dashboard/events/store</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/events/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/events/store</code></p>
<!-- END_02ddf95014c3eb621c3934b9220965be -->
<!-- START_473455d4f2f00487a780f841fec2da15 -->
<h2>dashboard/events/delete/{event}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/events/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/events/delete/{event}</code></p>
<!-- END_473455d4f2f00487a780f841fec2da15 -->
<!-- START_ade6735b112510efa153f54fb1950178 -->
<h2>dashboard/events/place/top/{event}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/events/place/top/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Event] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/events/place/top/{event}</code></p>
<!-- END_ade6735b112510efa153f54fb1950178 -->
<!-- START_a11ba9274262a124f7507323f753acbe -->
<h2>dashboard/events/show/{event}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/events/show/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Event] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/events/show/{event}</code></p>
<!-- END_a11ba9274262a124f7507323f753acbe -->
<!-- START_c46e2f8c0e7fec2927d818b1e23e9ce5 -->
<h2>dashboard/events/edit/{event}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/events/edit/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (404):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "No query results for model [App\\Models\\Event] 1"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/events/edit/{event}</code></p>
<!-- END_c46e2f8c0e7fec2927d818b1e23e9ce5 -->
<!-- START_335c631572559f0e59aead60b8237cf2 -->
<h2>dashboard/orders</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/orders" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/orders</code></p>
<!-- END_335c631572559f0e59aead60b8237cf2 -->
<!-- START_43e6c801f7b325ea55e64a535ed6beff -->
<h2>dashboard/orders/confirm</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/orders/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/orders/confirm</code></p>
<!-- END_43e6c801f7b325ea55e64a535ed6beff -->
<!-- START_7c7650ba47a9ece4ca25741d593e5db0 -->
<h2>dashboard/orders/invoiced</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/orders/invoiced" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/orders/invoiced</code></p>
<!-- END_7c7650ba47a9ece4ca25741d593e5db0 -->
<!-- START_fe66b7325a22f0204cf4b596fd8305c1 -->
<h2>dashboard/orders/confirm/{order}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/orders/confirm/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/orders/confirm/{order}</code></p>
<!-- END_fe66b7325a22f0204cf4b596fd8305c1 -->
<!-- START_fbc9b0c5fb09d9771fbcb81584d93616 -->
<h2>dashboard/orders/invoice/{order}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/orders/invoice/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/orders/invoice/{order}</code></p>
<!-- END_fbc9b0c5fb09d9771fbcb81584d93616 -->
<!-- START_f91ef88efd33cb52339ebe37f7606b19 -->
<h2>dashboard/setting</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/setting" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (302):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/setting</code></p>
<!-- END_f91ef88efd33cb52339ebe37f7606b19 -->
<!-- START_8e83b919f3cfbf6a07df2e4752a98f45 -->
<h2>dashboard/setting</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/setting" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/setting</code></p>
<!-- END_8e83b919f3cfbf6a07df2e4752a98f45 -->
<!-- START_a295572d86e4d37063995ef8a397bad1 -->
<h2>dashboard/houseparty</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/houseparty" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/houseparty</code></p>
<!-- END_a295572d86e4d37063995ef8a397bad1 -->
<!-- START_7c6c246ef65b6cbbb7fdaf06291ea6c9 -->
<h2>dashboard/houseparty/create</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/houseparty/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/houseparty/create</code></p>
<!-- END_7c6c246ef65b6cbbb7fdaf06291ea6c9 -->
<!-- START_9d3d368702723134cb8544e8b66da802 -->
<h2>dashboard/houseparty/store</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/houseparty/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/houseparty/store</code></p>
<!-- END_9d3d368702723134cb8544e8b66da802 -->
<!-- START_1fe1bb298abd6bbcf8fcd723a89301bc -->
<h2>dashboard/houseparty/delete/{houseparty}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/houseparty/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/houseparty/delete/{houseparty}</code></p>
<!-- END_1fe1bb298abd6bbcf8fcd723a89301bc -->
<!-- START_597ff4c76c73ac71fda47adda1631248 -->
<h2>dashboard/foodshop</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/foodshop" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/foodshop</code></p>
<!-- END_597ff4c76c73ac71fda47adda1631248 -->
<!-- START_c4e2d672f9412256dd28a5436857f737 -->
<h2>dashboard/foodshop/create</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/foodshop/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/foodshop/create</code></p>
<!-- END_c4e2d672f9412256dd28a5436857f737 -->
<!-- START_d1627abcf9570f7478d878acae9438c1 -->
<h2>dashboard/foodshop/store</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/foodshop/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/foodshop/store</code></p>
<!-- END_d1627abcf9570f7478d878acae9438c1 -->
<!-- START_ada728451886e089e13d7cc4486568a0 -->
<h2>dashboard/foodshop/delete/{foodshop}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/foodshop/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/foodshop/delete/{foodshop}</code></p>
<!-- END_ada728451886e089e13d7cc4486568a0 -->
<!-- START_93dc8769690b5f5555e43da4610f41ed -->
<h2>dashboard/address/store</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/address/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/address/store</code></p>
<!-- END_93dc8769690b5f5555e43da4610f41ed -->
<!-- START_312bc3466ee5990ec6a98e406fd4d671 -->
<h2>dashboard/address</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/address" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/address</code></p>
<!-- END_312bc3466ee5990ec6a98e406fd4d671 -->
<!-- START_160f2af70396f90cf114f8ae72df9d13 -->
<h2>dashboard/address/delete/{address}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/address/delete/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/address/delete/{address}</code></p>
<!-- END_160f2af70396f90cf114f8ae72df9d13 -->
<!-- START_b26bfc0cbd24d03f409e76aee11b682d -->
<h2>dashboard/login</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/dashboard/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET dashboard/login</code></p>
<!-- END_b26bfc0cbd24d03f409e76aee11b682d -->
<!-- START_805947295b86bf13c635e55974c91671 -->
<h2>Handle a login request to the application.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/login</code></p>
<!-- END_805947295b86bf13c635e55974c91671 -->
<!-- START_f4fbf16058b03a817ccc0abaa14f9464 -->
<h2>Log the user out of the application.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/dashboard/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST dashboard/logout</code></p>
<!-- END_f4fbf16058b03a817ccc0abaa14f9464 -->
<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
<h2>Show the application dashboard.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/home" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET home</code></p>
<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  </body>
</html>
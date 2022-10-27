<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>DJ-API documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>


    <script src="{{ asset("/vendor/scribe/js/theme-default-4.1.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-stats">
                                <a href="#endpoints-GETapi-stats">GET api/stats</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-stats-name">
                                <a href="#endpoints-GETapi-stats-name">GET api/stats/name</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-name">
                                <a href="#endpoints-GETapi-name">GET api/name</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-stats-email">
                                <a href="#endpoints-GETapi-stats-email">GET api/stats/email</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-email">
                                <a href="#endpoints-GETapi-email">GET api/email</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-stats-phone">
                                <a href="#endpoints-GETapi-stats-phone">GET api/stats/phone</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-phone">
                                <a href="#endpoints-GETapi-phone">GET api/phone</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: October 24, 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>In this documentation you can see DJ-API endpoints and example how it works</p>
<p>This documentation aims to provide all the information you need to work with DJ-API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost/DJ-API/project/public/</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-stats">GET api/stats</h2>

<p>
</p>



<span id="example-requests-GETapi-stats">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/DJ-API/project/public/api/stats" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/DJ-API/project/public/api/stats"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-stats">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;Empty field&quot;: &quot;16&quot;,
        &quot;Field must be at least 3 characters&quot;: &quot;3&quot;,
        &quot;field must be in Name Surname format, numbers and special characters are not allowed&quot;: &quot;7&quot;,
        &quot;Too much symbols, max allowed 35 characters&quot;: &quot;3&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-stats" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-stats"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-stats"></code></pre>
</span>
<span id="execution-error-GETapi-stats" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-stats"></code></pre>
</span>
<form id="form-GETapi-stats" data-method="GET"
      data-path="api/stats"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-stats', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/stats</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-stats-name">GET api/stats/name</h2>

<p>
</p>



<span id="example-requests-GETapi-stats-name">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/DJ-API/project/public/api/stats/name" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/DJ-API/project/public/api/stats/name"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-stats-name">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;0&quot;: {
        &quot;errors&quot;: &quot;Empty field&quot;,
        &quot;total&quot;: 16
    },
    &quot;2&quot;: {
        &quot;errors&quot;: &quot;field must be in Name Surname format, numbers and special characters are not allowed&quot;,
        &quot;total&quot;: 7
    },
    &quot;1&quot;: {
        &quot;errors&quot;: &quot;Field must be at least 3 characters&quot;,
        &quot;total&quot;: 3
    },
    &quot;3&quot;: {
        &quot;errors&quot;: &quot;Too much symbols, max allowed 35 characters&quot;,
        &quot;total&quot;: 3
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-stats-name" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-stats-name"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-stats-name"></code></pre>
</span>
<span id="execution-error-GETapi-stats-name" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-stats-name"></code></pre>
</span>
<form id="form-GETapi-stats-name" data-method="GET"
      data-path="api/stats/name"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-stats-name', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/stats/name</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-name">GET api/name</h2>

<p>
</p>



<span id="example-requests-GETapi-name">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/DJ-API/project/public/api/name" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nameSurname\": \"nymjwzchr\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/DJ-API/project/public/api/name"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nameSurname": "nymjwzchr"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-name">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    &quot;field must be in Name Surname format, numbers and special characters are not allowed&quot;
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-name" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-name"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-name"></code></pre>
</span>
<span id="execution-error-GETapi-name" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-name"></code></pre>
</span>
<form id="form-GETapi-name" data-method="GET"
      data-path="api/name"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-name', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/name</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>nameSurname</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="nameSurname"
               data-endpoint="GETapi-name"
               value="nymjwzchr"
               data-component="body" hidden>
    <br>
<p>Must match the regex /^(?:[\p{L}\p{Mn}\p{Pd}'\x{2019}]+\s[\p{L}\p{Mn}\p{Pd}'\x{2019}]+\s?)+$/u. Must be at least 3 characters. Must not be greater than 35 characters.</p>
        </p>
        </form>

                    <h2 id="endpoints-GETapi-stats-email">GET api/stats/email</h2>

<p>
</p>



<span id="example-requests-GETapi-stats-email">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/DJ-API/project/public/api/stats/email" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/DJ-API/project/public/api/stats/email"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-stats-email">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-stats-email" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-stats-email"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-stats-email"></code></pre>
</span>
<span id="execution-error-GETapi-stats-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-stats-email"></code></pre>
</span>
<form id="form-GETapi-stats-email" data-method="GET"
      data-path="api/stats/email"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-stats-email', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/stats/email</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-email">GET api/email</h2>

<p>
</p>



<span id="example-requests-GETapi-email">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/DJ-API/project/public/api/email" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/DJ-API/project/public/api/email"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-email">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-email" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-email"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-email"></code></pre>
</span>
<span id="execution-error-GETapi-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-email"></code></pre>
</span>
<form id="form-GETapi-email" data-method="GET"
      data-path="api/email"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-email', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/email</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-stats-phone">GET api/stats/phone</h2>

<p>
</p>



<span id="example-requests-GETapi-stats-phone">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/DJ-API/project/public/api/stats/phone" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/DJ-API/project/public/api/stats/phone"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-stats-phone">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">content-type: text/html; charset=UTF-8
cache-control: no-cache, private
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json"></code>
 </pre>
    </span>
<span id="execution-results-GETapi-stats-phone" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-stats-phone"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-stats-phone"></code></pre>
</span>
<span id="execution-error-GETapi-stats-phone" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-stats-phone"></code></pre>
</span>
<form id="form-GETapi-stats-phone" data-method="GET"
      data-path="api/stats/phone"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-stats-phone', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/stats/phone</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-phone">GET api/phone</h2>

<p>
</p>



<span id="example-requests-GETapi-phone">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/DJ-API/project/public/api/phone" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/DJ-API/project/public/api/phone"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-phone">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 53
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-phone" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-phone"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-phone"></code></pre>
</span>
<span id="execution-error-GETapi-phone" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-phone"></code></pre>
</span>
<form id="form-GETapi-phone" data-method="GET"
      data-path="api/phone"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-phone', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/phone</code></b>
        </p>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>

@extends('layouts/landing/documentation')


@section('seccion')

<div class="alert alert-secondary" role="alert">
    
    <h1> APICRIPTO</h1>
    <p>
        The coinlayer API is capable of delivering accurate exchange rate data for more than 385 cryptocurrencies in real-time. Crypto data is gathered from some of the largest cryptocurrency exchanges, requested using HTTP GET and returned in straightforward JSON format. Thanks to a refined fallback algorithm availablity, consistency and reliablity of crypto data returned by the coinlayer API are at the highest level.
        The API comes with a series of endpoints, functionalities and options. Find below a technical documentation containing descriptions, integration guides and examples in different programming languages.
    </p>

</div>

<div class="alert alert-secondary" role="alert" id="accessKey">
    
    <h1>Getting Started</h1>
    <h3>API Access Key</h3>
    <p>
        Your API access key is your unique authentication token used to gain access to the coinlayer API. You can find yours by logging in to your coinlayer account dashboard. 
        In order to authenticate with the API, simply append the access_key parameter to the API's base URL and set it to your API access key value.
        <br>
        <b>Base URL:</b>
        <br>
        <span class="badge badge-dark bg-dimensions">localhost:8000/api/</span>
    </p>

</div>

<div class="alert alert-secondary" role="alert" id="simple/price">
    
    <h1>/simple/price</h1>
    
    <p>
        Get the current price of any cryptocurrencies in any other supported currencies that you need.
        
    </p>
    <b>Example API Request:</b>
    <br>
    <span class="badge badge-dark bg-dimensions">
        localhost:8000/api/simple/price/{ids}/{vs_currencies}/{access_key}
    </span>
    <br>
    <b>Request Parameters:</b>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Parameter</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ids : <span class="badge badge-secondary">string</span> <span class="badge badge-danger">Required</span></td>
                <td>

                    Example : bitcoin
                </td>
            </tr>
            <tr>
                <td>vs_currencies : <span class="badge badge-secondary">string</span> <span class="badge badge-danger">Required</span></td>
                <td>
                    Example : usd
                </td>
            </tr>

            <tr>
                <td>access_key : <span class="badge badge-secondary">string</span> <span class="badge badge-danger">Required</span></td>
                <td>
                    Example : Your access key
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="alert alert-secondary" role="alert" id="simple/token_price">
    
    <h1>/simple/token_price</h1>
    
    <p>
        Get current price of tokens (using contract addresses) for a given platform in any other currency that you need.
        
    </p>
    <b>Example API Request:</b>
    <br>
    <span class="badge badge-dark bg-dimensions">
        localhost:8000/api/simple/token_price/{id}/{contract_addresses}/{vs_currencies}/{access_key}
    </span>
    <br>
    <b>Request Parameters:</b>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Parameter</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>id : <span class="badge badge-secondary">string</span> <span class="badge badge-danger">Required</span></td>
                <td>

                    Example : 
                </td>
            </tr>
            <tr>
                <td>contract_addresses : <span class="badge badge-secondary">string</span> <span class="badge badge-danger">Required</span></td>
                <td>
                    Example : 
                </td>
            </tr>

            <tr>
                <td>vs_currencies : <span class="badge badge-secondary">string</span> <span class="badge badge-danger">Required</span></td>
                <td>
                    Example : usd
                </td>
            </tr>


            <tr>
                <td>access_key : <span class="badge badge-secondary">string</span> <span class="badge badge-danger">Required</span></td>
                <td>
                    Example : Your access key
                </td>
            </tr>

        </tbody>
    </table>
</div>

<div class="alert alert-secondary" role="alert" id="simple/supported_vs_currencies">
    
    <h1>/simple/supported_vs_currencies</h1>
    
    <p>
        Get list of supported_vs_currencies.
        
    </p>
    <b>Example API Request:</b>
    <br>
    <span class="badge badge-dark bg-dimensions">
        localhost:8000/simple/supported_vs_currencies/{access_key}
    </span>
    <br>
    <b>Request Parameters:</b>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Parameter</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>access_key : <span class="badge badge-secondary">string</span> <span class="badge badge-danger">Required</span></td>
                <td>
                    Example : Your access key
                </td>
            </tr>

        </tbody>
    </table>
</div>

<div class="alert alert-secondary" role="alert" id="coins/list">
    
    <h1>/coins/list</h1>
    
    <p>
       
      List all supported coins id, name and symbol (no pagination required)
        
    </p>
    <b>Example API Request:</b>
    <br>
    <span class="badge badge-dark bg-dimensions">
        localhost:8000/api/coins/list/{access_key}
    </span>
    <br>
    <b>Request Parameters:</b>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Parameter</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>access_key : <span class="badge badge-secondary">string</span> <span class="badge badge-danger">Required</span></td>
                <td>
                    Example : Your access key
                </td>
            </tr>

        </tbody>
    </table>
</div>

<div class="alert alert-secondary" role="alert" id="coins/markets/">
    
    <h1>/coins/markets</h1>
    
    <p>
       
        List all supported coins price, market cap, volume, and market related data
        
    </p>
    <b>Example API Request:</b>
    <br>
    <span class="badge badge-dark bg-dimensions">
        localhost:8000/coins/markets/{vs_currency}/{access_key}
    </span>
    <br>
    <b>Request Parameters:</b>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Parameter</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>vs_currency : <span class="badge badge-secondary">string</span> <span class="badge badge-danger">Required</span></td>
                <td>
                    Example : usd
                </td>
            </tr>
            <tr>
                <td>access_key : <span class="badge badge-secondary">string</span> <span class="badge badge-danger">Required</span></td>
                <td>
                    Example : Your access key
                </td>
            </tr>

        </tbody>
    </table>
</div>


<div class="alert alert-secondary" role="alert" id="/coins">
    
    <h1>/coins</h1>
    
    <p>
       
       
        Get current data (name, price, market, ... including exchange tickers) for a coin
        
    </p>
    <b>Example API Request:</b>
    <br>
    <span class="badge badge-dark bg-dimensions">
        localhost:8000/coins/{id}/{access_key}
    </span>
    <br>
    <b>Request Parameters:</b>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Parameter</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>id : <span class="badge badge-secondary">string</span> <span class="badge badge-danger">Required</span></td>
                <td>
                    Example : bitcoin
                </td>
            </tr>
            <tr>
                <td>access_key : <span class="badge badge-secondary">string</span> <span class="badge badge-danger">Required</span></td>
                <td>
                    Example : Your access key
                </td>
            </tr>

        </tbody>
    </table>
</div>

<div class="alert alert-secondary" role="alert" id="/coins/tickers">
    
    <h1>/coins/tickers</h1>
    
    <p>
       
       
        Get coin tickers (paginated to 100 items)
        
    </p>
    <b>Example API Request:</b>
    <br>
    <span class="badge badge-dark bg-dimensions">
        localhost:8000/coins/tickers/{id}/{access_key}
    </span>
    <br>
    <b>Request Parameters:</b>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Parameter</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>id : <span class="badge badge-secondary">string</span> <span class="badge badge-danger">Required</span></td>
                <td>
                    Example : bitcoin
                </td>
            </tr>
            <tr>
                <td>access_key : <span class="badge badge-secondary">string</span> <span class="badge badge-danger">Required</span></td>
                <td>
                    Example : Your access key
                </td>
            </tr>

        </tbody>
    </table>
</div>

<div class="alert alert-secondary" role="alert" id="coins/history">
    
    <h1>/coins/history</h1>
    
    <p>
       
       
        Get historical data (name, price, market, stats) at a given date for a coin
        
    </p>
    <b>Example API Request:</b>
    <br>
    <span class="badge badge-dark bg-dimensions">
        localhost:8000/coins/history/{id}/{date}/{access_key}
    </span>
    <br>
    <b>Request Parameters:</b>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Parameter</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>id : <span class="badge badge-secondary">string</span> <span class="badge badge-danger">Required</span></td>
                <td>
                    Example : bitcoin
                </td>
            </tr>

            <tr>
                <td>date : <span class="badge badge-secondary">string</span> <span class="badge badge-danger">Required</span></td>
                <td>
                    Example : 30-12-2017
                </td>
            </tr>

            <tr>
                <td>access_key : <span class="badge badge-secondary">string</span> <span class="badge badge-danger">Required</span></td>
                <td>
                    Example : Your access key
                </td>
            </tr>

        </tbody>
    </table>
</div>
@endsection
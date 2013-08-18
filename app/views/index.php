<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Orders</title>
    <link rel="stylesheet" href="css/gumby.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<script type="text/x-handlebars" data-template-name="orders">
    <div class="content">
        <div class="row">
            <h1>Order Manager</h1>
        </div>

        {{outlet}}
    </div>
    <div class="row">
        <h2>New Order</h2>
    </div>
    <div class="row">
        <form action="#">
            <div class="field">
                {{view Ember.TextField class="text input" id="new-date" placeholder="Date?" valueBinding="newOrderDate"}}
            </div>
            <div class="field">
                {{view Ember.TextField class="text input" id="new-items" placeholder="Items" valueBinding="newItems"}}
            </div>
            <div class="field">
                {{view Ember.TextField class="text input" id="new-amount" placeholder="Amount" valueBinding="newAmount"}}
            </div>
        </form>
    </div>

    <div class="row" style="padding-bottom: 20px;">
        <div class="medium primary btn">
            <button id="submit" {{action "createOrder"}}>Add Order</button>
        </div>
        <div class="medium info btn"><a href="/">Cancel</a></div>
    </div>
</script>

<script type="text/x-handlebars" data-template-name="orders/index">
    <div class="row">
        <h2>My Orders</h2>
    </div>
    <div class="row" style="padding-bottom: 20px;">
        <div class="medium primary btn">
            {{#linkTo 'orders.new'}}Add Order{{/linkTo}}
        </div>
    </div>

    <div class="row">
        <table>
            <thead>
                <th>Date</th>
                <th>Items</th>
                <th>Amount</th>
                <th></th>
            </thead>
            <tbody>
                {{#each controller}}
                    <tr>
                        <td>{{date orderDate}}</td>
                        <td>{{items}}</td>
                        <td>{{currency price}}</td>
                        <td>
                            <button class="destroy"><i class="icon-cancel"></i></button>
                        </td>
                    </tr>
                {{/each}}
                <tr>
                    <td></td>
                    <td></td>
                    <td>{{currency total}}</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</script>

<script type="text/x-handlebars" data-template-name="orders/new">

</script>

    <?= javascript_include_tag() ?>
</body>
</html>

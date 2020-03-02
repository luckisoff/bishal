@extends('admin.parts.hotels.main')
@section('hotelsection')
<div class="row">
    <div class="col-md-12">
        <div class="widget box">
            <div class="widget-header">
                <h4><i class="icon-reorder"></i> Orders Invoiced</h4>
                <div class="toolbar no-padding">
                    <div class="btn-group">
                        <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
                    </div>
                </div>
            </div>
            <div class="widget-header">
                <h4>
                     <a href="{{route('dashboard.hotel.show',[$hotel->id,'orders'])}}"><i class="icon-eye-open"></i>New Orders</a> |
                     <a href="{{route('dashboard.hotel.show',[$hotel->id,'confirm-orders'])}}"><i class="icon-check"></i>Confirmed</a> |
                     <a href="{{route('dashboard.hotel.show',[$hotel->id,'success-orders'])}}"><i class="icon-rocket"></i>Dispatched</a>
                </h4>
            </div>
            <div class="widget-content no-padding">
                <table class="table table-striped table-bordered table-hover table-checkable table-responsive datatable">
                    <thead>
                        <tr>
                            <th class="checkbox-column">
                                <input type="checkbox" class="uniform">
                            </th>
                            <th data-class="expand">Invoice No.</th>
                            <th data-class="expand">Ordered By</th>
                            <th data-hide="phone">Phone</th>
                            <th data-hide="phone">Address</th>
                            <th data-hide="phone">Items</th>
                            <th data-hide="phone">Amount</th>
                            <th data-hide="phone">Status</th>
                            <th data-hide="phone,tablet">Action</th>
                        </tr>
                    </thead>
                    <tbody id="table-body">
                        @foreach($hotel->successOrders as $order)
                            <tr>
                                <td class="checkbox-column">
                                    <input type="checkbox" class="uniform">
                                </td>
                                <td>{{$order->invoice}}</td>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->user->mobile}}</td>
                                <td>{{$order->user->address}}</td>
                                <td>
                                @foreach($order->items as $item)
                                    <ul>
                                        <li>
                                            <span>{{ $item['name'] }}</span>
                                            <span>({{'Rs. '.$item['price'] }})</span>
                                        </li>
                                    </ul>
                                    <br>
                                @endforeach
                                </td>
                                <td>{{$order->amount}}</td>
                                <td>{!!$order->dispatched == 1?'<span class="btn btn-success btn-xs">Invoiced : '.$order->updated_at->diffForHumans().'</span>':''!!}</td>
                                <td>
                                    @if(auth()->user()->hasRole('manager') || auth()->user()->can('update order'))

                                        <a class="btn btn-info btn-sm" data-toggle="modal" href="#invoice-modal" href="#" onclick="showInvoice({{$order->id}});">
                                            <i class="icon-eye-open"></i>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /Invoice -->
<div class="modal fade" id="invoice-modal">
    <div class="modal-dialog" style="width:80%">
        <div class="modal-content">
            <div class="modal-body">
                <div id="invoice">
                    <div class="toolbar hidden-print">
                        <div class="text-right">
                            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
                            <!-- <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button> -->
                        </div>
                        <hr>
                    </div>
                    <div class="invoice overflow-auto" id="invoice-print">
                        <div style="min-width: 600px">
                            <header>
                                <div class="row">
                                    <div class="col col-md-6">
                                        <a target="_blank" href="#">
                                            <img src="{{$hotel->logo_url}}" data-holder-rendered="true" style="height:60px" />
                                        </a>
                                    </div>
                                    <div class="col col-md-6 company-details">
                                        <h2 class="name">
                                            <a target="_blank" href="#">
                                                {{$hotel->name}}
                                            </a>
                                        </h2>
                                        <div>{{$hotel->address}}</div>
                                        <div>{{$hotel->phone}}</div>
                                        <div>{{$hotel->website}}</div>
                                    </div>
                                </div>
                            </header>
                            <main id="invoice-main">
                                <div id="processing" class="text-center">Processing..</div>
                            </main>
                            <footer>
                                Invoice was created on a computer and is valid without the signature and seal.
                            </footer>
                        </div>
                        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{\URL::to('/assets/js/jQuery.print.js')}}"></script>
<script>
    function showInvoice(id) {
        var url = '{{route("dashboard.order.invoice",":id")}}';

        $.ajax({
                type: "GET",
                url: url.replace(':id',id),
                async:false,
                success: (response => {
                    console.log(response);
                    var invoice = response.invoice;
                    var user = response.user;
                    var template = `

                    <div class="row contacts">
                        <div class="col invoice-to">
                            <div class="text-gray-light">INVOICE TO:</div>
                            <h2 class="to">${user.name}</h2>
                            <div class="address">${user.address}</div>
                            <div class="email"><a href="mailto:${user.email}">${user.email}</a></div>
                        </div>
                        <div class="col invoice-details">
                            <h1 class="invoice-id">INVOICE ${invoice.invoice}</h1>
                            <div class="date">Date of Invoice: ${invoice.updated_at}</div>
                            <div class="date">Due Date: ${invoice.updated_at}</div>
                        </div>
                    </div>
                    <table border="0" cellspacing="0" cellpadding="0" class="table table-bordered text-right">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="text-left">Item Name</th>
                                <th class="text-right">Item Price</th>
                                <th class="text-right">Quantity</th>
                                <th class="text-right">Total</th>
                            </tr>
                        </thead>
                        <tbody id="invoice-body">
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="2">SUBTOTAL</td>
                                <td>Rs. ${invoice.amount}</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="2">TAX 13%</td>
                                <td>Rs. ${invoice.amount * 13 /100}</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td colspan="2">GRAND TOTAL</td>
                                <td>Rs. ${invoice.amount + (invoice.amount * 13 /100)}</td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="thanks">Thank you!</div>

                    `;

                    $('#invoice-main').html(template);
                    invoice.items.forEach(function(value, index){
                    var row = `<tr>
                                <td class="no">${index+1}</td>
                                <td class="text-left">${value.name}</td>
                                <td class="unit">${value.price}</td>
                                <td class="qty">${value.foodItemAdd}</td>
                                <td class="total">${value.price * value.foodItemAdd}</td>
                            </tr>`;
                        $('#invoice-body').append(row);
                    })
                }),
                error: (error => {
                    console.log(error);
                })
            });
    }

    $(document).ready(function(){
        $('#printInvoice').on('click',function(){
        //    $.print('#invoice-print');
            $('#invoice-print').print({
                globalStyles : true,
                mediaPrint : true,
                deferred: $.Deferred()
            })
        })
    })
</script>
@endsection

@section('styles')
<style>
    @media print
    {
        @page { size: landscape; }
        body { visibility: hidden; }
        #invoice-print { visibility: visible; width:100%;height:100% }
    }
    #invoice{
        padding: 30px;
    }

    .invoice {
        position: relative;
        background-color: #FFF;
        padding: 15px
    }

    .invoice header {
        padding: 10px 0;
        margin-bottom: 20px;
        border-bottom: 1px solid #3989c6
    }

    .invoice .company-details {
        text-align: right
    }

    .invoice .company-details .name {
        margin-top: 0;
        margin-bottom: 0
    }

    .invoice .contacts {
        margin-bottom: 20px
    }

    .invoice .invoice-to {
        text-align: left
    }

    .invoice .invoice-to .to {
        margin-top: 0;
        margin-bottom: 0
    }

    .invoice .invoice-details {
        text-align: right
    }

    .invoice .invoice-details .invoice-id {
        margin-top: 0;
        color: #3989c6
    }

    .invoice main {
        padding-bottom: 50px
    }

    .invoice main .thanks {
        margin-top: -100px;
        font-size: 2em;
        margin-bottom: 50px
    }

    .invoice main .notices {
        padding-left: 6px;
        border-left: 6px solid #3989c6
    }

    .invoice main .notices .notice {
        font-size: 1.2em
    }







    .invoice table tfoot td {
        background: 0 0;
        border-bottom: none;
        white-space: nowrap;
        text-align: right;
        padding: 10px 20px;
        font-size: 1.2em;
        border-top: 1px solid #aaa
    }

    .invoice table tfoot tr:first-child td {
        border-top: none
    }

    .invoice table tfoot tr:last-child td {
        color: #3989c6;
        font-size: 1.4em;
        border-top: 1px solid #3989c6
    }

    .invoice table tfoot tr td:first-child {
        border: none
    }

    .invoice footer {
        width: 100%;
        text-align: center;
        color: #777;
        border-top: 1px solid #aaa;
        padding: 8px 0
    }

    @media print {
        .invoice {
            font-size: 11px!important;
            overflow: hidden!important
        }

        .invoice footer {
            position: absolute;
            bottom: 10px;
            page-break-after: always
        }

        .invoice>div:last-child {
            page-break-before: always
        }
    }
</style>
@endsection

<div>
    @foreach ($charges->data as $charge)
    <p>Customer : {{$charge->billing_details->name}} {{$charge->amount / 100}} {{strtoupper($charge->currency)}} {{$charge->status}} {{$charge->payment_method_details->card->last4}}</p>
    @endforeach
</div>
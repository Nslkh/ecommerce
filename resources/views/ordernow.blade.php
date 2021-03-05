@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-6">
    <table class="table table-striped">
    <tbody>
      <tr>
        <td>Price</td>
        <td>{{$total}} $</td>
      
      </tr>
      <tr>
        <td>Tax</td>
        <td>0 $</td>
      <tr>
        <td>Delivery</td>
        <td>100</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$total +100}}</td>
      </tr>
    </tbody>
  </table>
    
    <form action="#">
        <div class="form-group">
            <textarea class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Payment method</label>
            <p> <input type="radio"  name="payment"> <span>Online Payment</span>  </p>
            <p> <input type="radio"  name="payment"> <span> EMI Payment</span>  </p>
            <p> <input type="radio"  name="payment"> <span>Payment on Delivery</span>  </p>
        </div>
        <button type="submit" class="btn btn-default">Order Now</button>
    </form>
    </div>
</div>
@endsection
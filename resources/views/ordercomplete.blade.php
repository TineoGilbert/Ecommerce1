@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <table class="table table-striped">
            
            <tbody>
              <tr>
                <td>Amount</td>
                <td>${{$total}}</td>
                
              </tr>
              <tr>
                <td>Tax</td>
                <td>$0</td>
        
              </tr>
            
              <tr>
                <td>Delivery</td>
                <td>$7</td>
        
              </tr>

              <tr>
                <td>Total</td>
                <td>${{$total + 9}}</td>
        
              </tr>
            </tbody>
          </table>

          <div>
            <form action="/action_page.php">
                <div class="form-group">
                  <textarea type="email" placeholder="Please entre your address" class="form-control"></textarea>
                  
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br>
                  <input type="radio" name="payment"> <span>Online Payment</span> <br><br>
                  <input type="radio" name="payment"> <span>EMI Payment</span> <br><br>
                  <input type="radio" name="payment"> <span>Payment on Delivery</span> <br><br>
                </div>
                
                <button type="submit" class="btn btn-success">Pay Order</button>
              </form>
          </div>
    </div>
</div>

@endsection
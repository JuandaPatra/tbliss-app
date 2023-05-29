
<div style="background-color:#ecf0f1;box-sizing:border-box;font-family:'Open Sans',sans-serif;font-size:16px;margin:0;padding:0">

  <div style="background:#ffffff;border:1px solid #dddddd;border-radius:4px;margin:10px auto;padding:10px;width:600px">

    <div style="color:#5b5b5b;padding:5px 15px 10px 5px">
      <div style="display:inline-block">
        <div style="padding-left:8px;padding-right:8px">
          <h1 style="color:#000;font-size:20px;font-weight:600;margin:0">
          #{{$invoiceId}}
          </h1>
        </div>
      </div>
    </div>
    <div style="border-bottom:1px dashed #d2e1f0;height:2px"></div>


    <div style="padding:15px">
      <div style="margin-bottom:12px">

        <p style="font-size:22px;font-weight:700;margin:0 0 20px 0">Order Summary</p>
        <p style="font-size:18px;margin:0">
          Please finish your Order with invoice id <span style="font-size:18px;color:#ff0000">#{{$invoiceId}}</span> before {{$duedate}}
        </p>
      </div>
      <table style="border-collapse:collapse;color:#5b5b5b;text-align:left;width:100%">
        <thead>
          <tr style="border-bottom:none;border-left:6px solid #ecf0f1;border-right:6px solid #ecf0f1;border-top:5px solid #ecf0f1">
            <th width="51%" style="padding:8px;padding-top:15px">Description</th>
            <th width="12%" style="padding:8px;padding-top:15px">PRICE</th>
            <th width="25%" style="padding:8px;padding-top:15px">Qty</th>
            <th width="12%" style="padding:8px;padding-top:15px">SUBTOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr style="border-bottom:5px solid #ecf0f1;border-left:6px solid #ecf0f1;border-right:6px solid #ecf0f1;border-top:2px solid #ecf0f1">
            <td style="border-bottom:1px solid #ededed;line-height:1.42857143;padding:8px;vertical-align:top">
              {{$trip_name}}
              <br>
             (Down Payment)
            </td>
            <td style="border-bottom:1px solid #ededed;line-height:1.42857143;padding:8px;vertical-align:top">
              {{$price}}
            </td>
            <td style="padding: 0px 20px;">
              {{$qty}}
            </td>
            <td style="border-bottom:1px solid #ededed;line-height:1.42857143;padding:8px;vertical-align:top">
              {{$price_total}}
            </td>
          </tr>
          
        </tbody>
      </table>
      <div>
        <div style="color:#5b5b5b;float:right;width:100%">
          <table style="background-color:#ecf0f1;font-size:20px;margin:0 0 12px 0;padding:10px;width:100%">
            <tbody>
              <tr>
                <td width="85%">CART TOTAL</td>
                <td width="15%" style="text-align:right">{{$grandTotal}}</td>
              </tr>
              <tr>
                <td width="85%">Booking Fee</td>
                <td width="15%" style="text-align:right">Rp.0</td>
              </tr>
              <tr style="color:#000;font-weight:700">
                <td style="font-size:18px;padding-top:10px">TOTAL</td>
                <td style="font-size:18px;padding-top:10px;text-align:right">
                {{$grandTotal}}
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div style="clear:both"></div>
      </div>
    </div>


    <div style="border-bottom:1px dashed #d2e1f0;height:2px"></div>
    <div style="margin-bottom:12px;margin-top:12px">
      <span style="font-size:18px;font-weight:700;padding: 15px;">Buyer Information</span>
    </div>
    <div style="padding:0 15px">
      <table id="m_579706666474593286attendeeInfoTable" cellspacing="0" cellpadding="0" border="0" style="color:#5b5b5b;margin-bottom:10px;padding:2px 0;width:100%">
        <tbody>
          <tr style="height:30px">
            <td style="padding:10px" width="575" height="21">Name</td>
            <td style="padding:10px" width="293" height="21" align="right">{{$nama}}</td>
          </tr>
          <tr style="height:30px">
            <td style="padding:10px" width="575" height="21">Email</td>
            <td style="padding:10px" width="293" height="21" align="right"><a href="mailto:patrajuanda10@gmail.com" target="_blank">{{$email}}</a></td>
          </tr>
          <tr style="height:30px">
            <td style="padding:10px" width="575" height="21">Telephone</td>
            <td style="padding:10px" width="293" height="21" align="right">{{$telephone}}</td>
          </tr>

        </tbody>
      </table>
    </div>
    
    <div style="border-bottom:1px dashed #d2e1f0;height:2px" class="adL"></div>
    <div class="adL">
    </div>
  </div>
  <div class="adL">

  </div>
</div>
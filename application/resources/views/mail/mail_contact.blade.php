

<html>

<style>

  table {
          border-style: none;
        }

  .stronger {
                        text-align: left;
                        font-weight:bold;
                        text-transform: uppercase;
                        }
  .message {
              border-style:solid;
              border-width:2px;
          }

</style>

<table>
  <h2>You have received the following new mail:</h2>
<thead>
    <tr>
      <td class="stronger">FROM:</td>
      <td>{{$content['firstName'].' '.$content['surname'].' < '.$content['email'].' >'}}</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="stronger">TEL:</td>
      {{-- <td>{{ ($errors->has('firstName'))? 'alert alert-danger':''}}</td> --}}
      <td> {{($content['phone']!='')? $content['phone']:'Not provided'}}</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th class="stronger">Message:</th>
      <th></th>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr class="message">
      <td>{{$content['message']}}</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td></td>
      <td></td>
    </tr>
    <tr class="stronger">
      <td>SENT:</td>
      <td colspan="2">{{$content['stamp']}}</td>
    </tr>
  </tfoot>
</table>
</html>

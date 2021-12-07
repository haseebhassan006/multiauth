@extends('donor.layout')
@section('content')
@include('donor.partials.blocks')
@include('donor.partials.tabs')
<div class="table-responsive box-table mt-4 bg-white rounded shadow-sm p-2">
<table class="table table-bordered m-0">
<thead>
<tr>
<th>Date</th>
<th>For</th>
<th>Amount</th>
</tr>
</thead>
<tbody>
<tr>
<td>March 02, 2021</td>
<td>
Order Revenue (<a href="#" target="blank" class="text-success"> View Order </a>)
</td>
<td class="text-success"> +$23.75 </td>
</tr>
<tr>
<td>February 16, 2021</td>
<td>
Order Tip Revenue (<a href="#" target="blank" class="text-success"> View Order </a>)
</td>
<td class="text-success"> +$4.00 </td>
</tr>
<tr>
<td>February 16, 2021</td>
<td>
Order Revenue (<a href="#" target="blank" class="text-success"> View Order </a>)
</td>
<td class="text-success"> +$11.40 </td>
</tr>
<tr>
<td>February 04, 2021</td>
<td>
Order Revenue (<a href="#" target="blank" class="text-success"> View Order </a>)
</td>
<td class="text-success"> +$9.50 </td>
</tr>
<tr>
<td>January 31, 2021</td>
<td>
Order Revenue (<a href="#" target="blank" class="text-success"> View Order </a>)
</td>
<td class="text-success"> +$38.00 </td>
</tr>
<tr>
<td>January 23, 2021</td>
<td>
Order Revenue (<a href="#" target="blank" class="text-success"> View Order </a>)
</td>
<td class="text-success"> +$47.50 </td>
</tr>
<tr>
<td>January 22, 2021</td>
<td>
Order Tip Revenue (<a href="#" target="blank" class="text-success"> View Order </a>)
</td>
<td class="text-success"> +$5.00 </td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
@endsection
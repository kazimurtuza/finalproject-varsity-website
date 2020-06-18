
  <h3 style="margin-top: -3%; text-align:center;color:rgb(247, 247, 248);background: rgb(126, 159, 171);">SUMMARY INFORMATION</h3>
  <div class="row">
    <div class=" col-4">
    
<table class="table table-hover bg-info"  >
  <tbody cellpadding="1">

       
          
<table cellpadding="7" id="tableCrntAcdm" width="300%"  class="img_border" style="margin-left:37px; padding:5px 6px; margin-bottom:36px">     

                <tbody><tr>
                    <td style="background: #000066; color: #FFFFFF;" colspan="11"><strong>Spring, 2020</strong></td>
                </tr>
                <tr style="background: #599BDC;">
                    <th>Course Code</th>
                    <th>Course Name</th>
                    <th>Credit</th>
                    <th>Intake</th>
                    <th>Sec</th>
                    <th>Subject-Type</th>
                    <th>Final</th>
                    <th>Mid</th>
                    <th>Out of 30</th>
                    <th>TOTAL</th>
                    <th>Attendance (%)</th>
				</tr>
				@foreach ($data as $val)
				<tr style="background: #f3f5f7";>
				<td>{{$val->course_no}}</td>
							<td>{{$val->course_title}}</td>
							<td>{{$val->cradit}}</td>
							<td>{{$val->intake}}</td>
							<td>{{$val->section}}</td>
							<td>{{$val->type}}</td> 
							<td>-</td>
							<td>100</td>
							<td>5</td> 
							<td>5</td>
							<td>78</td>
						</tr>
					
				@endforeach
                					
									{{-- <tr style="background: #eaf0f1">
							<td>CSE 445</td>
							<td>Introduction to Cryptography</td>
							<td>3</td>
							<td>
								33 - 
								1							</td>
							<td>Theory</td>
							<td>-</td>
							<td>0</td>
							<td>5</td>
							<td>5</td>
							<td>84</td>
						</>
									<tr style="background: #f3f5f7">
							<td>CSE 446</td>
							<td>Introduction to Cryptography Lab</td>
							<td>1.5</td>
							<td>
								33 - 
								1							</td>
							<td>Lab</td>
							<td>-</td>
							<td></td>
							<td></td>
							<td>0</td>
							<td>--</td>
						</tr> --}}
				                <tr>
                    <td style="background: #3498db;" colspan="11"><strong>SGPA:  and CGPA: </strong></td>
                </tr>
            </tbody></table>
   
  </tbody>
</table>
      
    </div>
  </div>
 

     
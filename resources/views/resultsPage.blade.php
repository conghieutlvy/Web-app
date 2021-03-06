@extends('Template/results')
<?php function show($i,$res){
	if($res[$i]) { ?> <center><img alt="Bootstrap Image Preview" class = "center" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOgAAADZCAMAAAAdUYxCAAAAkFBMVEX///8AfwAAfQAAdwAAegAAeAAAewAAdQAAgQDv9+/2+/bR5dH9//35/fkAggDq9Oqsz6zC3MJDl0OaxJrg7uBoqGjW6Naz07NImUhyrnJOnE5ZoVk0kDQ6kzqiyaJ8s3wqjCqRv5GGuYZgpWCdxp3I38gZhxm82LweiR7j7+M9kD3K3cp3sHdlp2UtjS2HtYdiZxpBAAAH40lEQVR4nOWda1+jPBDFQ7gVSm9Kq9baq9K6j7rf/9s9bddVoUAOBHeS8f/Cd/qbGJJMTk4mQnAmiUbpZHz9e3fYUIfyPUT9/c3mbv5r3fNc1/eCcEUdUZfE6ey/8WY1fRj64bl5Ujp/8KfUsemTxPHx41yu7t8yR/q55n3g7aij1OTxZTpfD93w2Dzvsnmf7bxNqCPVYxuWdd8FwYI6UE0mobKNJ+Qhpo5Uj2d1X57bOYyoI9XkDWqo7D1TB6rJ1IM61JtRB6rJEhugXp86UE36WH+6e+pANYl70AANx9SB6jIPoP60PpFfuVA7X6jj1OUGmoisT3BFCo1P74o6Tl0GB6ShcjGgDlSXHbKyyJ7tiZ+4RgaodFLqOHV58oF22p8QiQiaiKxPiIR4QBrqWp8QiRfkw3W31GFqM0YmIgaK3wxZWLw5dZjaxEimIA/WJwpiDnSodEbUYWqzQbYs1isnQuyRdrpP1GFqM/ohC6hYAA0N7V9AIXHTs38BFWNggHq31FHq0wcyIg4LaJQhM5HtRw9HrgBxk8HCIrbAAA1vqKPUB8kUGOzMRAosLAx2ZiJZA2f3D9RRdgAgbsrMemlTiGtggErrpU0sUwgZLCyjnrqd7pI6yg4AMgWXg8kPEDc5ZPLIlsV6s9QJRNz0GEy4A0edKbgT6ig74F7dofabMQQkbnKQThDnpnyjDrIDRspmOrJnvyYvEkDcdK0/1D5yB0xEDLRqxLnJQVJAnJsMDkEh56bM7NdwMecmg8wPETdDDpkf4Nx0r6mD7ADgjgcHbVMM1OImC20TEDftv69z4lE9QH0Omd8TMOEyOEwSkVrcZKH5AeImi8wPEDdlxkDzEzfqAerbbwsTIlW3k8UWFMgU/DvqILtA7dyUtt/UPgOImxy0MDEBMgUGp6CIc5PF1gxwbnr31DF2wVSdKTDw+UHHoBxOB8UM0E5YbFnUzk0WYrW4VWYKPLQTtbjJwheGODdZnJqlgI+Ig18KcG6yOL4Xr+oty5vlRbTOAM5Nj8OWpQ9MRPbf1T6Jm+pMgYOPCBA3Axbi5kq9ZemxEDd/yCkLkilw0BSS4Q/RFIBjUBanD4C4GXIYoIC4yWKAAs5NHgNULW7yGKCIc5PDAAUK2LAYoIhz0/p6fgJzbjocVHnAuWl/XTQBOTdZDFBA3GSxgj4jt5gZrKAJUJ2bxQoKXEt3H6mD7ADgjgcLBxzg3GQxQCO1puCEHBxwyLV0DiuoWtw0L8WNWpzLAs5N01Tc/jRsXhQ9BepjGLWCDsYP7nGsNf3XA85No45Z0hfpniL2m55BA9fSA2PqRgz2D/57vE3vViM1Nz1DDBmj35n7+fk1q2MGZAqGOKaSyTzMfXxBk60UUnPTM+HRh+h67RZjDRscuAPX0uWa3qjQf3W9y0g93LN2B1TnJr/8EC/XbnnmBmffSM1N6r3Z7M7xqz47dPKYAe1sNOI7J75ZVHTmGbnG/gpUc5Mw9Uu3zsUEVOhSaFgh1bnpKvUk+8JqUkaAONeQmptkXtzRJlN05ntL1anMHimKS+TFfdr52HtkjqfcJUNPDwYURXGjZVY3ARXIVH8OeSaAIvWbTatXk9IYFTY9M6tzx+N1iHfmGVm/sQKupTsy+8epX7rqQRNQnrDuLkofeZflX1vDXtWrSRl1Ww7AuUkgKkD//TKqV5hbYBwQiAqAFllGtaSC/UECczUgXpUxrPhz0NODJKV6Zu26tOLuKvT0oEdTOQJ6M+YCWbrBSpAtC7j96Z6rVh+vX5bAQU8Pkj2084w9LVwMt2TrgVTnppSrl60+3ktLEODcpNuznEGWvgv8Yq2LCPo1SfmQx6hNenTRNdDTg8Q1iRDB7jLmfLoKODePI/uVqIV/uW/x8Qa5oKGnBx3yg1Dowa4i8ksih+UdBrxA89ji4/U+FwpM3PRNKKYFTSVFPn4bETcdeSBs3wdtct4P2QdLIw15e3DbvKV/JRXo6UFzTvARZaAY+7mPRtC/SBrzWjqUweXxzhWykKcHiWTcchCVsoAfgVsW6pQoB/ZOdg7vEdwSmOUNa54JygXix3AMSIny3DbuU/AXTHvKI22rfiowIiXKsW2lZ6swIyXKkXxHO01JiXIAptPGmOk6bj4fqTAnJcqB+GubYWpxl1XH85GxBWPjbttJ65mqpZVSVt1QQ9y4ZbQSGyoww41bAfIeJgi5vFlPi/1aBYbl8kVaiZ9lGF9Oa9NNcm9+vbsEeM1VjQ03CDtJea14VaiDJcaI+w9K9JcYW579em1zOPwVW8ovPWtOvEQemxbo7WLIPDbNiYc6DcVuGJhBS7PKGd+qGt3Q4W4plr3m0eLU6R0TZb865i271EzZr4aWQpllH+4JyDt0gYWvP7Q4SLS06HqLjWlgpl6tAHIa55GG6tUKGm9MjZb96sCcGB8YLvvVAFSU/4Ic2rEJLWPXZGNq2hF+E0YNutSuXL4IftzftJKKYcSw9mlhSpQDPV6zMiXKgV0BYvD8A/AQqnmFw1qBeHl9er+8Pon6Gn5o/QA9M1Ftwc1yb2qgKJIWLOjrL3VD/X0POTTYktGQp7qP1zbVr5aaKx82p/IlVF6+NMku3wVVFg4mC8sXyu3zxnr9NCi7OmmtRlTLRdHuwLHkXLsp43ypHP/KTm0ToJ99pkiBMdfqvoPBSp6rWR1/Ttl25x+i5S7rHaZLm5r5P+H6bN0K9PbmAAAAAElFTkSuQmCC" width="100"></center> <?php }
	else { ?><center><img alt="Bootstrap Image Preview" src="data:image/png;base64,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" width="100"></center> <?php }} ?>

@section('q1')
	<?php show(0,$res); ?>
@stop
@section('q2')
	<?php show(1,$res); ?>
@stop
@section('q3')
	<?php show(2,$res); ?>
@stop
@section('q4')
	<?php show(3,$res); ?>
@stop
@section('q5')
	<?php show(4,$res); ?>
@stop
@section('q6')
	<?php show(5,$res); ?>
@stop
@section('q7')
	<?php show(6,$res); ?>
@stop
@section('q8')
	<?php show(7,$res); ?>
@stop
@section('q9')
	<?php show(8,$res); ?>
@stop
@section('q10')
	<?php show(9,$res); ?>
@stop


@section('total')
<?php 
	$count = 0;
	for($i = 0; $i < 10; $i++)
		if($res[$i]) $count++;
	echo $count;
?>
@stop
@section('pass')
<?php
	if ($count >= 5 && $count <=7){
		echo "Bạn cần cố gắng hơn nữa";}
	else if($count >= 8){
		echo "Bạn đã có thể thi thật rồi đó";}
	else if($count <5){ 
		echo "Bạn không đạt rồi, cố gắng lên";}
?>
@stop
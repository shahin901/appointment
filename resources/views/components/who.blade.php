@if(Auth::guard('web')->check())
<p class="text-success">
	You are Logged In as <STRONG>user</STRONG>

</p>
@else
<p class="text-danger">
	You are Logged Out as a <STRONG>user</STRONG>
</p>

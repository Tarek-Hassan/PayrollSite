@extends('layouts.app')
@section('content')
<div class="widget-content p-5">
<form action="{{ route('PayrollCalculations') }}" method="GET">

        <fieldset>
            <div class="row">
                <div class="col-md-3">
                    <label for="name">{{ trans('home.salary') }}</label>
                    <input type="number" class="form-control" name="salary"
                        placeholder="{{ trans('home.salary') }}"
                        value="{{ request()->input('salary') }}">
                </div>
                <div class="col-md-3">
                    <label for="name">{{ trans('home.socialInsurance') }}</label>
                    <input type="number" class="form-control" name="socialInsurance"
                        placeholder="{{ trans('home.socialInsurance') }}"
                        value="{{ request()->input('socialInsurance') }}">
                </div>

                <div class="col-md-2">
                    <label for="customer_type_id">{{ trans('home.select') }}</label>
                    <select class="selectpicker form-control" name="type"
                        title="{{ trans('home.select') }}">
                        <option value="net"
                            {{ request()->input('type') == "net" ? 'selected':'' }}>
                            {{ trans('home.net') }}</option>
                        <option value="gross"
                            {{ request()->input('type') == "gross" ? 'selected':'' }}>
                            {{ trans('home.gross') }}</option>
                    </select>
                </div>
                <div class="col-md-2 text-center " style='margin-top:35px;'>
                    <button type="submit"
                        class="btn btn-success btn-icon btn-sm mr-1">{{ trans('home.calculate') }}</button>
                    <a href="{{ route('PayrollCalculations') }}"
                        class="btn btn-danger btn-icon btn-sm">{{ trans('home.reset') }}</a>
                </div>
            </div>
        </fieldset>
</form>
<hr />

<div class="row pb-75">
<div class="col-md-4">
	<fieldset>
        @foreach($payroll as $key => $value)
            <div class="row">
                <div class="col-md-12">
                    <label for="name">{{trans('home.'.$key)}}</label>
                    <input type="text" class="form-control" value="{{ $value }}" disabled>
                </div>
            </div>
        @endforeach
        </fieldset>
</div>
@if($payroll)
<div class="col-md-8">
   <img src="{{asset("assets/$dir/images/Payroll-Servies.png")}}" alt="image">
</div>
@endif
</div>


    

@endsection


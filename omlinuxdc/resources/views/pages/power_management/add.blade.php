@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('add_new_power_management');
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="add" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="card-4 bg-light mb-3" >
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md-auto " >
                    <div class="row  q-col-gutter-sm q-px-sm" >
                        <div class="col">
                            <div class="h5 font-weight-bold text-primary">{{ __('add_new_power_management') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <div  class="mb-3" >
        <div class="container">
            <div class="row ">
                <div class="col-md-9 comp-grid" >
                    <?php Html::display_page_errors($errors); ?>
                    <div  class="card-4 page-content" >
                        <!--[form-start]-->
                        <form id="power_management-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('power_management.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="bettry">{{ __('bettry') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-bettry-holder" class=" ">
                                                <input id="ctrl-bettry"  value="<?php echo get_value('bettry') ?>" type="text" placeholder="{{ __('enter_bettry') }}" list="bettry_list"  required="" name="bettry"  class="form-control " />
                                                <datalist id="bettry_list">
                                                <?php
                                                    $options = Menu::bettry();
                                                    if(!empty($options)){
                                                    foreach($options as $option){
                                                    $value = $option['value'];
                                                    $label = $option['label'];
                                                    $selected = Html::get_field_selected('bettry', $value);
                                                ?>
                                                <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                <?php echo $label ?>
                                                </option>
                                                <?php
                                                    }
                                                    }
                                                ?>
                                                </datalist>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="inverter">{{ __('inverter') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-inverter-holder" class=" ">
                                                <input id="ctrl-inverter"  value="<?php echo get_value('inverter') ?>" type="text" placeholder="{{ __('enter_inverter') }}" list="inverter_list"  required="" name="inverter"  class="form-control " />
                                                <datalist id="inverter_list">
                                                <?php
                                                    $options = Menu::bettry();
                                                    if(!empty($options)){
                                                    foreach($options as $option){
                                                    $value = $option['value'];
                                                    $label = $option['label'];
                                                    $selected = Html::get_field_selected('inverter', $value);
                                                ?>
                                                <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                <?php echo $label ?>
                                                </option>
                                                <?php
                                                    }
                                                    }
                                                ?>
                                                </datalist>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="power_consumes">{{ __('power_consumes') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-power_consumes-holder" class=" ">
                                                <input id="ctrl-power_consumes"  value="<?php echo get_value('power_consumes') ?>" type="text" placeholder="{{ __('enter_power_consumes') }}" list="power_consumes_list"  required="" name="power_consumes"  class="form-control " />
                                                <datalist id="power_consumes_list">
                                                <?php
                                                    $options = Menu::bettry();
                                                    if(!empty($options)){
                                                    foreach($options as $option){
                                                    $value = $option['value'];
                                                    $label = $option['label'];
                                                    $selected = Html::get_field_selected('power_consumes', $value);
                                                ?>
                                                <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                <?php echo $label ?>
                                                </option>
                                                <?php
                                                    }
                                                    }
                                                ?>
                                                </datalist>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="backup_hours">{{ __('backup_hours') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-backup_hours-holder" class="input-group ">
                                                <input id="ctrl-backup_hours" class="form-control datepicker  datepicker"  required="" value="<?php echo get_value('backup_hours') ?>" type="time" name="backup_hours" placeholder="{{ __('enter_backup_hours') }}" data-enable-time="true" data-min-date="" data-max-date=""  data-alt-format="H:i" data-date-format="H:i:S" data-inline="false" data-no-calendar="true" data-mode="single" /> 
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="material-icons">access_time</i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="estimated_bill_month">{{ __('estimated_bill_month') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-estimated_bill_month-holder" class=" ">
                                                <input id="ctrl-estimated_bill_month"  value="<?php echo get_value('estimated_bill_month') ?>" type="text" placeholder="{{ __('enter_estimated_bill_month') }}" list="estimated_bill_month_list"  required="" name="estimated_bill_month"  class="form-control " />
                                                <datalist id="estimated_bill_month_list">
                                                <?php
                                                    $options = Menu::bettry();
                                                    if(!empty($options)){
                                                    foreach($options as $option){
                                                    $value = $option['value'];
                                                    $label = $option['label'];
                                                    $selected = Html::get_field_selected('estimated_bill_month', $value);
                                                ?>
                                                <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                <?php echo $label ?>
                                                </option>
                                                <?php
                                                    }
                                                    }
                                                ?>
                                                </datalist>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="estimated_cost_per_day">{{ __('estimated_cost_per_day') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-estimated_cost_per_day-holder" class=" ">
                                                <input id="ctrl-estimated_cost_per_day"  value="<?php echo get_value('estimated_cost_per_day') ?>" type="text" placeholder="{{ __('enter_estimated_cost_per_day') }}" list="estimated_cost_per_day_list"  required="" name="estimated_cost_per_day"  class="form-control " />
                                                <datalist id="estimated_cost_per_day_list">
                                                <?php
                                                    $options = Menu::bettry();
                                                    if(!empty($options)){
                                                    foreach($options as $option){
                                                    $value = $option['value'];
                                                    $label = $option['label'];
                                                    $selected = Html::get_field_selected('estimated_cost_per_day', $value);
                                                ?>
                                                <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                <?php echo $label ?>
                                                </option>
                                                <?php
                                                    }
                                                    }
                                                ?>
                                                </datalist>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="estimated_cost_month">{{ __('estimated_cost_month') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-estimated_cost_month-holder" class=" ">
                                                <input id="ctrl-estimated_cost_month"  value="<?php echo get_value('estimated_cost_month') ?>" type="text" placeholder="{{ __('enter_estimated_cost_month') }}" list="estimated_cost_month_list"  required="" name="estimated_cost_month"  class="form-control " />
                                                <datalist id="estimated_cost_month_list">
                                                <?php
                                                    $options = Menu::bettry();
                                                    if(!empty($options)){
                                                    foreach($options as $option){
                                                    $value = $option['value'];
                                                    $label = $option['label'];
                                                    $selected = Html::get_field_selected('estimated_cost_month', $value);
                                                ?>
                                                <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                <?php echo $label ?>
                                                </option>
                                                <?php
                                                    }
                                                    }
                                                ?>
                                                </datalist>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-ajax-status"></div>
                            <!--[form-button-start]-->
                            <div class="form-group form-submit-btn-holder text-center mt-3">
                                <button class="btn btn-primary" type="submit">
                                {{ __('submit') }}
                                <i class="material-icons">send</i>
                                </button>
                            </div>
                            <!--[form-button-end]-->
                        </form>
                        <!--[form-end]-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('pagecss')
<style>
	/**
	body{
			
	}
	*/
</style>
@endsection
@section('pagejs')
<script>
	/*
	* Page Custom Javascript | Jquery codes
	*/

	//$(document).ready(function(){
	//	
	//});
</script>

@endsection

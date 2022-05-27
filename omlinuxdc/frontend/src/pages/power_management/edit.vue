<template>
    <div class="main-page">
        <template v-if="showHeader">
            <q-card  :flat="isSubPage" class="page-section q-py-sm q-px-md q-mb-md nice-shadow-18" >
                <div class="container">
                    <div class="row justify-between q-col-gutter-md">
                        <div class="col-12 col-md-auto " >
                            <div class="" >
                                <div class="row  items-center q-col-gutter-sm q-px-sm">
                                    <div class="col">
                                        <div class="text-h6 text-primary">{{ $t('edit_power_management') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </q-card>
        </template>
        <section class="page-section q-mb-md" >
            <div class="container">
                <div class="row q-col-gutter-x-md">
                    <div class="col-md-9 col-12 comp-grid" >
                        <q-card  :flat="isSubPage" class="q-pa-md nice-shadow-18">
                            <div >
                                <template v-if="!loading">
                                    <div class="row  q-col-gutter-x-md">
                                        <div class="col">
                                            <ValidationObserver ref="observer" v-slot="{ invalid }" tag="form" @submit.prevent="startRecordUpdate()">
                                                <!--[form-content-start]-->
                                                <div class="row q-col-gutter-x-md">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-12">
                                                                {{ $t('bettry') }} *
                                                            </div>
                                                            <div class="col-sm-9 col-12">
                                                                <ValidationProvider :rules="{required:true}" :name="$t('bettry')" v-slot="{ errors, invalid, validated }">
                                                                    <q-input outlined dense  ref="ctrlbettry" v-model.trim="formData.bettry"  :label="$t('bettry')" type="text" :placeholder="$t('enter_bettry')"   list="bettry_list"    
                                                                    class="" :error="invalid && validated" :error-message="errors[0]">
                                                                    </q-input>
                                                                    <datalist id="bettry_list">
                                                                    <option v-for="(menu, index) in $menus.bettryItems" :key="index" :value="menu.value">{{ menu.label }}</option>
                                                                    </datalist>
                                                                </ValidationProvider>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-12">
                                                                {{ $t('inverter') }} *
                                                            </div>
                                                            <div class="col-sm-9 col-12">
                                                                <ValidationProvider :rules="{required:true}" :name="$t('inverter')" v-slot="{ errors, invalid, validated }">
                                                                    <q-input outlined dense  ref="ctrlinverter" v-model.trim="formData.inverter"  :label="$t('inverter')" type="text" :placeholder="$t('enter_inverter')"   list="inverter_list"    
                                                                    class="" :error="invalid && validated" :error-message="errors[0]">
                                                                    </q-input>
                                                                    <datalist id="inverter_list">
                                                                    <option v-for="(menu, index) in $menus.bettryItems" :key="index" :value="menu.value">{{ menu.label }}</option>
                                                                    </datalist>
                                                                </ValidationProvider>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-12">
                                                                {{ $t('power_consumes') }} *
                                                            </div>
                                                            <div class="col-sm-9 col-12">
                                                                <ValidationProvider :rules="{required:true}" :name="$t('power_consumes')" v-slot="{ errors, invalid, validated }">
                                                                    <q-input outlined dense  ref="ctrlpower_consumes" v-model.trim="formData.power_consumes"  :label="$t('power_consumes')" type="text" :placeholder="$t('enter_power_consumes')"   list="power_consumes_list"    
                                                                    class="" :error="invalid && validated" :error-message="errors[0]">
                                                                    </q-input>
                                                                    <datalist id="power_consumes_list">
                                                                    <option v-for="(menu, index) in $menus.bettryItems" :key="index" :value="menu.value">{{ menu.label }}</option>
                                                                    </datalist>
                                                                </ValidationProvider>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-12">
                                                                {{ $t('backup_hours') }} *
                                                            </div>
                                                            <div class="col-sm-9 col-12">
                                                                <ValidationProvider :rules="{required:true}" :name="$t('backup_hours')" v-slot="{ errors, invalid, validated }">
                                                                    <q-input outlined dense  v-model.trim="formData.backup_hours"   :error="invalid && validated" :error-message="errors[0]" >
                                                                    <template v-slot:append>
                                                                        <q-icon name="access_time" class="cursor-pointer">
                                                                        <q-popup-proxy transition-show="scale" transition-hide="scale">
                                                                        <q-time   mask="HH:mm" v-model="formData.backup_hours" />
                                                                        </q-popup-proxy>
                                                                        </q-icon>
                                                                    </template>
                                                                    </q-input>
                                                                </ValidationProvider>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-12">
                                                                {{ $t('estimated_bill_month') }} *
                                                            </div>
                                                            <div class="col-sm-9 col-12">
                                                                <ValidationProvider :rules="{required:true}" :name="$t('estimated_bill_month')" v-slot="{ errors, invalid, validated }">
                                                                    <q-input outlined dense  ref="ctrlestimated_bill_month" v-model.trim="formData.estimated_bill_month"  :label="$t('estimated_bill_month')" type="text" :placeholder="$t('enter_estimated_bill_month')"   list="estimated_bill_month_list"    
                                                                    class="" :error="invalid && validated" :error-message="errors[0]">
                                                                    </q-input>
                                                                    <datalist id="estimated_bill_month_list">
                                                                    <option v-for="(menu, index) in $menus.bettryItems" :key="index" :value="menu.value">{{ menu.label }}</option>
                                                                    </datalist>
                                                                </ValidationProvider>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-12">
                                                                {{ $t('estimated_cost_per_day') }} *
                                                            </div>
                                                            <div class="col-sm-9 col-12">
                                                                <ValidationProvider :rules="{required:true}" :name="$t('estimated_cost_per_day')" v-slot="{ errors, invalid, validated }">
                                                                    <q-input outlined dense  ref="ctrlestimated_cost_per_day" v-model.trim="formData.estimated_cost_per_day"  :label="$t('estimated_cost_per_day')" type="text" :placeholder="$t('enter_estimated_cost_per_day')"   list="estimated_cost_per_day_list"    
                                                                    class="" :error="invalid && validated" :error-message="errors[0]">
                                                                    </q-input>
                                                                    <datalist id="estimated_cost_per_day_list">
                                                                    <option v-for="(menu, index) in $menus.bettryItems" :key="index" :value="menu.value">{{ menu.label }}</option>
                                                                    </datalist>
                                                                </ValidationProvider>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-12">
                                                                {{ $t('estimated_cost_month') }} *
                                                            </div>
                                                            <div class="col-sm-9 col-12">
                                                                <ValidationProvider :rules="{required:true}" :name="$t('estimated_cost_month')" v-slot="{ errors, invalid, validated }">
                                                                    <q-input outlined dense  ref="ctrlestimated_cost_month" v-model.trim="formData.estimated_cost_month"  :label="$t('estimated_cost_month')" type="text" :placeholder="$t('enter_estimated_cost_month')"   list="estimated_cost_month_list"    
                                                                    class="" :error="invalid && validated" :error-message="errors[0]">
                                                                    </q-input>
                                                                    <datalist id="estimated_cost_month_list">
                                                                    <option v-for="(menu, index) in $menus.bettryItems" :key="index" :value="menu.value">{{ menu.label }}</option>
                                                                    </datalist>
                                                                </ValidationProvider>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--[form-content-end]-->
                                                <div v-if="showSubmitButton" class="text-center q-my-md">
                                                    <q-btn    :rounded="false"  color="primary"  no-caps  unelevated   type="submit" :disabled="invalid" icon-right="send" :loading="saving">
                                                        <q-spinner-oval slot="loading" /> {{ $t('update') }}
                                                    </q-btn>
                                                </div>
                                            </ValidationObserver>
                                            <slot :submit="submit" :saving="saving"></slot>
                                        </div>
                                    </div>
                                </template>
                                <template v-else>
                                    <div class="q-pa-sm text-center">
                                        <q-spinner :size="40" color="accent" indeterminate></q-spinner>
                                    </div>
                                </template>
                            </div>
                        </q-card>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
	import { PageMixin } from "../../mixins/page.js";
	import { EditPageMixin } from "../../mixins/editpage.js";
	import { mapActions, mapGetters, mapState } from "vuex";
	export default {
		name: 'editPowermanagementPage',
		components: {
		},
		mixins: [PageMixin, EditPageMixin ],
		props: {
			pageName: {
				type: String,
				default: 'power_management',
			},
			idName: {
				type: String,
				default: 'id',
			},
			routeName: {
				type: String,
				default: 'power_managementedit',
			},
			pagePath: {
				type : String,
				default : 'power_management/edit',
			},
			apiPath: {
				type: String,
				default: 'power_management/edit',
			},
		},
		data() {
            return {
				formData: {
					bettry: "", inverter: "", power_consumes: "", backup_hours: "", estimated_bill_month: "", estimated_cost_per_day: "", estimated_cost_month: "", 
				},
				backup_hoursPicker:false,
        	}
		},
		computed: {
			pageTitle:{
				get: function () {
					return this.$t('edit_power_management')
				}
			},
			currentRecord: {
				get: function () {
					return this.$store.getters["power_management/currentRecord"];
				},
				set: function (value) {
					this.$store.commit("power_management/setCurrentRecord", value);
				},
			},
		},
		meta () {
			return {
				title: this.pageTitle // set browser page title
			}
		},
		methods: {
			...mapActions('power_management', ['updateRecord', 'fetchRecord']),
			async startRecordUpdate(){
				const isFormValid = await this.$refs.observer.validate();
				if(isFormValid){
					this.saving = true;
					let id = this.id;
					let url = this.apiUrl;
					let payload = this.normalizedFormData();
					let data = { id, url, payload }
					this.updateRecord(data).then(
						(response) => {
							this.saving = false;
							this.flashMsg(this.msgAfterUpdate);
							this.resetForm();
							this.closeDialogs();// close page dialog that if opened
							if(this.redirect) this.navigateTo(`/power_management`);
						},
						(response) => {
							this.saving = false;
							this.showPageRequestError(response);
						}
					);
				}
			},
			updateFormFields: function(){
				//update form fields value after load from api
				//e.g convert fieldvalue (value,value2,value2) to array 
            },
			resetForm (){
				//reset form fields value
				this.formData = {bettry: "", inverter: "", power_consumes: "", backup_hours: "", estimated_bill_month: "", estimated_cost_per_day: "", estimated_cost_month: "", };
				requestAnimationFrame(() => {
					this.$refs.observer.reset();
				});
				//raise event to reset other custom form components
				this.$EventBus.$emit("resetForm");
			},
		},
		watch: {
		},
		async mounted() {
		},
		async created() {
		},
	};
</script>
<style scoped>
</style>

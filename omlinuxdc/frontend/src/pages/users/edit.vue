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
                                        <div class="text-h6 text-primary">{{ $t('edit_users') }}</div>
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
                                                                {{ $t('first_name') }} *
                                                            </div>
                                                            <div class="col-sm-9 col-12">
                                                                <ValidationProvider :rules="{required:true}" :name="$t('first_name')" v-slot="{ errors, invalid, validated }">
                                                                    <q-input outlined dense  ref="ctrlfirst_name" v-model.trim="formData.first_name"  :label="$t('first_name')" type="text" :placeholder="$t('enter_first_name')"   list="first_name_list"    
                                                                    class="" :error="invalid && validated" :error-message="errors[0]">
                                                                    </q-input>
                                                                    <datalist id="first_name_list">
                                                                    <option v-for="(menu, index) in $menus.bettryItems" :key="index" :value="menu.value">{{ menu.label }}</option>
                                                                    </datalist>
                                                                </ValidationProvider>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-12">
                                                                {{ $t('last_name') }} *
                                                            </div>
                                                            <div class="col-sm-9 col-12">
                                                                <ValidationProvider :rules="{required:true}" :name="$t('last_name')" v-slot="{ errors, invalid, validated }">
                                                                    <q-input outlined dense  ref="ctrllast_name" v-model.trim="formData.last_name"  :label="$t('last_name')" type="text" :placeholder="$t('enter_last_name')"   list="last_name_list"    
                                                                    class="" :error="invalid && validated" :error-message="errors[0]">
                                                                    </q-input>
                                                                    <datalist id="last_name_list">
                                                                    <option v-for="(menu, index) in $menus.bettryItems" :key="index" :value="menu.value">{{ menu.label }}</option>
                                                                    </datalist>
                                                                </ValidationProvider>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-12">
                                                                {{ $t('profile_picture') }} *
                                                            </div>
                                                            <div class="col-sm-9 col-12">
                                                                <ValidationProvider :rules="{required:true}" :name="$t('profile_picture')" v-slot="{ errors, invalid, validated }">
                                                                    <div class="q-mb-sm">
                                                                        <q-uploader-input :max-files="1" :max-file-size="3" accept=".jpg,.png,.gif,.jpeg" :multiple="false" square flat bordered style="width:100%" :label="$t('choose_files_or_drop_files_here')" upload-path="fileuploader/upload/profile_picture" v-model="formData.profile_picture"></q-uploader-input>
                                                                        <small class="q-pa-sm text-negative" v-if="invalid && validated">{{errors[0]}}</small>
                                                                        <div class="q-pa-xs"><file-viewer removable v-model="formData.profile_picture"></file-viewer></div>
                                                                    </div>
                                                                </ValidationProvider>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-12">
                                                                {{ $t('email') }} *
                                                            </div>
                                                            <div class="col-sm-9 col-12">
                                                                <ValidationProvider :rules="{required:true, email:true}" :name="$t('email')" v-slot="{ errors, invalid, validated }">
                                                                    <q-input outlined dense  ref="ctrlemail" v-model.trim="formData.email"  :label="$t('email')" type="email" :placeholder="$t('enter_email')"   list="email_list"    
                                                                    class="" :error="invalid && validated" :error-message="errors[0]">
                                                                    </q-input>
                                                                    <datalist id="email_list">
                                                                    <option v-for="(menu, index) in $menus.bettryItems" :key="index" :value="menu.value">{{ menu.label }}</option>
                                                                    </datalist>
                                                                </ValidationProvider>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-12">
                                                                {{ $t('special_instruction') }} *
                                                            </div>
                                                            <div class="col-sm-9 col-12">
                                                                <ValidationProvider :rules="{required:true}" :name="$t('special_instruction')" v-slot="{ errors, invalid, validated }">
                                                                    <q-input outlined dense  ref="ctrlspecial_instruction" v-model.trim="formData.special_instruction"  :label="$t('special_instruction')" type="text" :placeholder="$t('enter_special_instruction')"   list="special_instruction_list"    
                                                                    class="" :error="invalid && validated" :error-message="errors[0]">
                                                                    </q-input>
                                                                    <datalist id="special_instruction_list">
                                                                    <option v-for="(menu, index) in $menus.bettryItems" :key="index" :value="menu.value">{{ menu.label }}</option>
                                                                    </datalist>
                                                                </ValidationProvider>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-12">
                                                                {{ $t('mobile_number') }} *
                                                            </div>
                                                            <div class="col-sm-9 col-12">
                                                                <ValidationProvider :rules="{required:true}" :name="$t('mobile_number')" v-slot="{ errors, invalid, validated }">
                                                                    <q-input outlined dense  ref="ctrlmobile_number" v-model.trim="formData.mobile_number"  :label="$t('mobile_number')" type="text" :placeholder="$t('enter_mobile_number')"   list="mobile_number_list"    
                                                                    class="" :error="invalid && validated" :error-message="errors[0]">
                                                                    </q-input>
                                                                    <datalist id="mobile_number_list">
                                                                    <option v-for="(menu, index) in $menus.bettryItems" :key="index" :value="menu.value">{{ menu.label }}</option>
                                                                    </datalist>
                                                                </ValidationProvider>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-12">
                                                                {{ $t('state_id') }} *
                                                            </div>
                                                            <div class="col-sm-9 col-12">
                                                                <ValidationProvider :rules="{required:true}" :name="$t('state_id')" v-slot="{ errors, invalid, validated }">
                                                                    <q-input outlined dense  ref="ctrlstate_id" v-model.trim="formData.state_id"  :label="$t('state_id')" type="number" :placeholder="$t('enter_state_id')"   step="any" list="state_id_list"    
                                                                    class="" :error="invalid && validated" :error-message="errors[0]">
                                                                    </q-input>
                                                                    <datalist id="state_id_list">
                                                                    <option v-for="(menu, index) in $menus.bettryItems" :key="index" :value="menu.value">{{ menu.label }}</option>
                                                                    </datalist>
                                                                </ValidationProvider>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-12">
                                                                {{ $t('role_id') }} *
                                                            </div>
                                                            <div class="col-sm-9 col-12">
                                                                <ValidationProvider :rules="{required:true}" :name="$t('role_id')" v-slot="{ errors, invalid, validated }">
                                                                    <q-input outlined dense  ref="ctrlrole_id" v-model.trim="formData.role_id"  :label="$t('role_id')" type="number" :placeholder="$t('enter_role_id')"   step="any" list="role_id_list"    
                                                                    class="" :error="invalid && validated" :error-message="errors[0]">
                                                                    </q-input>
                                                                    <datalist id="role_id_list">
                                                                    <option v-for="(menu, index) in $menus.bettryItems" :key="index" :value="menu.value">{{ menu.label }}</option>
                                                                    </datalist>
                                                                </ValidationProvider>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-sm-3 col-12">
                                                                {{ $t('city_id') }} *
                                                            </div>
                                                            <div class="col-sm-9 col-12">
                                                                <ValidationProvider :rules="{required:true}" :name="$t('city_id')" v-slot="{ errors, invalid, validated }">
                                                                    <q-input outlined dense  ref="ctrlcity_id" v-model.trim="formData.city_id"  :label="$t('city_id')" type="number" :placeholder="$t('enter_city_id')"   step="any" list="city_id_list"    
                                                                    class="" :error="invalid && validated" :error-message="errors[0]">
                                                                    </q-input>
                                                                    <datalist id="city_id_list">
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
		name: 'editUsersPage',
		components: {
		},
		mixins: [PageMixin, EditPageMixin ],
		props: {
			pageName: {
				type: String,
				default: 'users',
			},
			idName: {
				type: String,
				default: 'id',
			},
			routeName: {
				type: String,
				default: 'usersedit',
			},
			pagePath: {
				type : String,
				default : 'users/edit',
			},
			apiPath: {
				type: String,
				default: 'users/edit',
			},
		},
		data() {
            return {
				formData: {
					first_name: "", last_name: "", profile_picture: "", email: "", special_instruction: "", mobile_number: "", state_id: "", role_id: "", city_id: "", 
				},
        	}
		},
		computed: {
			pageTitle:{
				get: function () {
					return this.$t('edit_users')
				}
			},
			currentRecord: {
				get: function () {
					return this.$store.getters["users/currentRecord"];
				},
				set: function (value) {
					this.$store.commit("users/setCurrentRecord", value);
				},
			},
		},
		meta () {
			return {
				title: this.pageTitle // set browser page title
			}
		},
		methods: {
			...mapActions('users', ['updateRecord', 'fetchRecord']),
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
							if(this.redirect) this.navigateTo(`/users`);
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
				this.formData = {first_name: "", last_name: "", profile_picture: "", email: "", special_instruction: "", mobile_number: "", state_id: "", role_id: "", city_id: "", };
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

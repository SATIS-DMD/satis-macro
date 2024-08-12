<?php

namespace Satis2020\ServicePackage\Database\Seeds;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class UpdatePermissionsDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //admin
        $admin = [
            'list-any-institution' => __("permissions.admin.list_any_institution", [], app()->getLocale()),
            'store-any-institution' => __("permissions.admin.store_any_institution", [], app()->getLocale()),
            'update-any-institution' => __("permissions.admin.update_any_institution", [], app()->getLocale()),
            'destroy-any-institution' => __("permissions.admin.destroy_any_institution", [], app()->getLocale()),
            'show-any-institution' => __("permissions.admin.show_any_institution", [], app()->getLocale()),
            'list-category-client' => __("permissions.admin.list_category_client", [], app()->getLocale()),
            'store-category-client' => __("permissions.admin.store_category_client", [], app()->getLocale()),
            'update-category-client' => __("permissions.admin.update_category_client", [], app()->getLocale()),
            'destroy-category-client' => __("permissions.admin.destroy_category_client", [], app()->getLocale()),
            'show-category-client' => __("permissions.admin.show_category_client", [], app()->getLocale()),
            'list-channel' => __("permissions.admin.list_channel", [], app()->getLocale()),
            'store-channel' => __("permissions.admin.store_channel", [], app()->getLocale()),
            'update-channel' => __("permissions.admin.update_channel", [], app()->getLocale()),
            'destroy-channel' => __("permissions.admin.destroy_channel", [], app()->getLocale()),
            'show-channel' => __("permissions.admin.show_channel", [], app()->getLocale()),
            'list-claim-category' => __("permissions.admin.list_claim_category", [], app()->getLocale()),
            'store-claim-category' => __("permissions.admin.store_claim_category", [], app()->getLocale()),
            'update-claim-category' => __("permissions.admin.update_claim_category", [], app()->getLocale()),
            'destroy-claim-category' => __("permissions.admin.destroy_claim_category", [], app()->getLocale()),
            'show-claim-category' => __("permissions.admin.show_claim_category", [], app()->getLocale()),
            'list-claim-object' => __("permissions.admin.list_claim_object", [], app()->getLocale()),
            'store-claim-object' => __("permissions.admin.store_claim_object", [], app()->getLocale()),
            'update-claim-object' => __("permissions.admin.update_claim_object", [], app()->getLocale()),
            'destroy-claim-object' => __("permissions.admin.destroy_claim_object", [], app()->getLocale()),
            'show-claim-object' => __("permissions.admin.show_claim_object", [], app()->getLocale()),
            'update-claim-object-requirement' => __("permissions.admin.update_claim_object_requirement", [], app()->getLocale()),
            'list-client-from-any-institution' => __("permissions.admin.list_client_from_any_institution", [], app()->getLocale()),
            'store-client-from-any-institution' => __("permissions.admin.store_client_from_any_institution", [], app()->getLocale()),
            'update-client-from-any-institution' => __("permissions.admin.update_client_from_any_institution", [], app()->getLocale()),
            'destroy-client-from-any-institution' => __("permissions.admin.destroy_client_from_any_institution", [], app()->getLocale()),
            'show-client-from-any-institution' => __("permissions.admin.show_client_from_any_institution", [], app()->getLocale()),
            'show-mail-parameters' => __("permissions.admin.show_mail_parameters", [], app()->getLocale()),
            'update-mail-parameters' => __("permissions.admin.update_mail_parameters", [], app()->getLocale()),
            'show-sms-parameters' => __("permissions.admin.show_sms_parameters", [], app()->getLocale()),
            'update-sms-parameters' => __("permissions.admin.update_sms_parameters", [], app()->getLocale()),
            'list-currency' => __("permissions.admin.list_currency", [], app()->getLocale()),
            'store-currency' => __("permissions.admin.store_currency", [], app()->getLocale()),
            'update-currency' => __("permissions.admin.update_currency", [], app()->getLocale()),
            'destroy-currency' => __("permissions.admin.destroy_currency", [], app()->getLocale()),
            'show-currency' => __("permissions.admin.show_currency", [], app()->getLocale()),
            'show-dashboard-data-all-institution' => __("permissions.admin.show_dashboard_data_all_institution", [], app()->getLocale()),
            'list-faq-category' => __("permissions.admin.list_faq_category", [], app()->getLocale()),
            'store-faq-category' => __("permissions.admin.store_faq_category", [], app()->getLocale()),
            'update-faq-category' => __("permissions.admin.update_faq_category", [], app()->getLocale()),
            'destroy-faq-category' => __("permissions.admin.destroy_faq_category", [], app()->getLocale()),
            'show-faq-category' => __("permissions.admin.show_faq_category", [], app()->getLocale()),
            'list-message-apis' => __("permissions.admin.list_message_apis", [], app()->getLocale()),
            'store-message-apis' => __("permissions.admin.store_message_apis", [], app()->getLocale()),
            'update-message-apis' => __("permissions.admin.update_message_apis", [], app()->getLocale()),
            'destroy-message-apis' => __("permissions.admin.destroy_message_apis", [], app()->getLocale()),
            'update-institution-message-api' => __("permissions.admin.update_institution_message_api", [], app()->getLocale()),
            'update-my-institution-message-api' => __("permissions.admin.update_my_institution_message_api", [], app()->getLocale()),
            'list-position' => __("permissions.admin.list_position", [], app()->getLocale()),
            'store-position' => __("permissions.admin.store_position", [], app()->getLocale()),
            'update-position' => __("permissions.admin.update_position", [], app()->getLocale()),
            'destroy-position' => __("permissions.admin.destroy_position", [], app()->getLocale()),
            'show-position' => __("permissions.admin.show_position", [], app()->getLocale()),
            'list-unit-type' => __("permissions.admin.list_unit_type", [], app()->getLocale()),
            'store-unit-type' => __("permissions.admin.store_unit_type", [], app()->getLocale()),
            'update-unit-type' => __("permissions.admin.update_unit_type", [], app()->getLocale()),
            'destroy-unit-type' => __("permissions.admin.destroy_unit_type", [], app()->getLocale()),
            'show-unit-type' => __("permissions.admin.show_unit_type", [], app()->getLocale()),
            'list-any-unit' => __("permissions.admin.list_any_unit", [], app()->getLocale()),
            'store-any-unit' => __("permissions.admin.store_any_unit", [], app()->getLocale()),
            'update-any-unit' => __("permissions.admin.update_any_unit", [], app()->getLocale()),
            'destroy-any-unit' => __("permissions.admin.destroy_any_unit", [], app()->getLocale()),
            'show-any-unit' => __("permissions.admin.show_any_unit", [], app()->getLocale()),
            'list-category-client-from-my-institution' => __("permissions.admin.list_category_client_from_my_institution", [], app()->getLocale()),
            'store-category-client-from-my-institution' => __("permissions.admin.store_category_client_from_my_institution", [], app()->getLocale()),
            'update-category-client-from-my-institution' => __("permissions.admin.update_category_client_from_my_institution", [], app()->getLocale()),
            'destroy-category-client-from-my-institution' => __("permissions.admin.destroy_category_client_from_my_institution", [], app()->getLocale()),
            'show-category-client-from-my-institution' => __("permissions.admin.show_category_client_from_my_institution", [], app()->getLocale()),
            'update-notifications' => __("permissions.admin.update_notifications", [], app()->getLocale()),
            'list-performance-indicator' => __("permissions.admin.list_performance_indicator", [], app()->getLocale()),
            'store-performance-indicator' => __("permissions.admin.store_performance_indicator", [], app()->getLocale()),
            'update-performance-indicator' => __("permissions.admin.update_performance_indicator", [], app()->getLocale()),
            'destroy-performance-indicator' => __("permissions.admin.destroy_performance_indicator", [], app()->getLocale()),
            'show-performance-indicator' => __("permissions.admin.show_performance_indicator", [], app()->getLocale()),
            'edit-performance-indicator' => __("permissions.admin.edit_performance_indicator", [], app()->getLocale()),
            'update-processing-circuit-any-institution' => __("permissions.admin.update_processing_circuit_any_institution", [], app()->getLocale()),
            'list-severity-level' => __("permissions.admin.list_severity_level", [], app()->getLocale()),
            'update-severity-level' => __("permissions.admin.update_severity_level", [], app()->getLocale()),
            'show-severity-level' => __("permissions.admin.show_severity_level", [], app()->getLocale()),
            'list-staff-from-any-unit' => __("permissions.admin.list_staff_from_any_unit", [], app()->getLocale()),
            'store-staff-from-any-unit' => __("permissions.admin.store_staff_from_any_unit", [], app()->getLocale()),
            'update-staff-from-any-unit' => __("permissions.admin.update_staff_from_any_unit", [], app()->getLocale()),
            'destroy-staff-from-any-unit' => __("permissions.admin.destroy_staff_from_any_unit", [], app()->getLocale()),
            'show-staff-from-any-unit' => __("permissions.admin.show_staff_from_any_unit", [], app()->getLocale()),
            'edit-staff-from-any-unit' => __("permissions.admin.edit_staff_from_any_unit", [], app()->getLocale()),
            'list-account-type' => __("permissions.admin.list_account_type", [], app()->getLocale()),
            'show-account-type' => __("permissions.admin.show_account_type", [], app()->getLocale()),
            'update-account-type' => __("permissions.admin.update_account_type", [], app()->getLocale()),
            'store-account-type' => __("permissions.admin.store_account_type", [], app()->getLocale()),
            'destroy-account-type' => __("permissions.admin.destroy_account_type", [], app()->getLocale()),
            'list-user-any-institution' => __("permissions.admin.list_user_any_institution", [], app()->getLocale()),
            'show-user-any-institution' => __("permissions.admin.show_user_any_institution", [], app()->getLocale()),
            'store-user-any-institution' => __("permissions.admin.store_user_any_institution", [], app()->getLocale()),
            'list-delai-qualification-parameters' => __("permissions.admin.list_delai_qualification_parameters", [], app()->getLocale()),
            'show-delai-qualification-parameters' => __("permissions.admin.show_delai_qualification_parameters", [], app()->getLocale()),
            'store-delai-qualification-parameters' => __("permissions.admin.store_delai_qualification_parameters", [], app()->getLocale()),
            'destroy-delai-qualification-parameters' => __("permissions.admin.destroy_delai_qualification_parameters", [], app()->getLocale()),
            'list-delai-treatment-parameters' => __("permissions.admin.list_delai_treatment_parameters", [], app()->getLocale()),
            'show-delai-treatment-parameters' => __("permissions.admin.show_delai_treatment_parameters", [], app()->getLocale()),
            'store-delai-treatment-parameters' => __("permissions.admin.store_delai_treatment_parameters", [], app()->getLocale()),
            'destroy-delai-treatment-parameters' => __("permissions.admin.destroy_delai_treatment_parameters", [], app()->getLocale()),
            'update-components-parameters' => __("permissions.admin.update_components_parameters", [], app()->getLocale()),
            'list-any-institution-type-role' => __("permissions.admin.list_any_institution_type_role", [], app()->getLocale()),
            'show-any-institution-type-role' => __("permissions.admin.show_any_institution_type_role", [], app()->getLocale()),
            'store-any-institution-type-role' => __("permissions.admin.store_any_institution_type_role", [], app()->getLocale()),
            'update-any-institution-type-role' => __("permissions.admin.update_any_institution_type_role", [], app()->getLocale()),
            'destroy-any-institution-type-role' => __("permissions.admin.destroy_any_institution_type_role", [], app()->getLocale()),
            'update-active-pilot' => __("permissions.admin.update_active_pilot", [], app()->getLocale()),
            'update-recurrence-alert-settings' => __("permissions.admin.update_recurrence_alert_settings", [], app()->getLocale()),
            'update-reject-unit-transfer-parameters' => __("permissions.admin.update_reject_unit_transfer_parameters", [], app()->getLocale()),
            'update-min-fusion-percent-parameters' => __("permissions.admin.update_min_fusion_percent_parameters", [], app()->getLocale()),
            'update-relance-parameters' => __("permissions.admin.update_relance_parameters", [], app()->getLocale()),
            'update-measure-preventive-parameters' => __("permissions.admin.update_measure_preventive_parameters", [], app()->getLocale()),
            'show-faq' => __("permissions.admin.show_faq", [], app()->getLocale()),
            'store-faq' => __("permissions.admin.store_faq", [], app()->getLocale()),
            'update-faq' => __("permissions.admin.update_faq", [], app()->getLocale()),
            'delete-faq' => __("permissions.admin.delete_faq", [], app()->getLocale()),
            'search-claim-any-reference' => __("permissions.admin.search_claim_any_reference", [], app()->getLocale()),
            'list-auth-config' => __("permissions.admin.list_auth_config", [], app()->getLocale()),
            'update-auth-config' => __("permissions.admin.update_auth_config", [], app()->getLocale()),
            'activity-log' => __("permissions.admin.activity_log", [], app()->getLocale()),
            'list-any-notification-proof' => __("permissions.admin.list_any_notification_proof", [], app()->getLocale()),
            'list-client-from-my-institution' => __("permissions.admin.list_client_from_my_institution", [], app()->getLocale()),
            'store-client-from-my-institution' => __("permissions.admin.store_client_from_my_institution", [], app()->getLocale()),
            'update-client-from-my-institution' => __("permissions.admin.update_client_from_my_institution", [], app()->getLocale()),
            'destroy-client-from-my-institution' => __("permissions.admin.destroy_client_from_my_institution", [], app()->getLocale()),
            'show-client-from-my-institution' => __("permissions.admin.show_client_from_my_institution", [], app()->getLocale()),
            'update-my-institution' => __("permissions.admin.update_my_institution", [], app()->getLocale()),
            'list-my-unit' => __("permissions.admin.list_my_unit", [], app()->getLocale()),
            'store-my-unit' => __("permissions.admin.store_my_unit", [], app()->getLocale()),
            'update-my-unit' => __("permissions.admin.update_my_unit", [], app()->getLocale()),
            'destroy-my-unit' => __("permissions.admin.destroy_my_unit", [], app()->getLocale()),
            'show-my-unit' => __("permissions.admin.show_my_unit", [], app()->getLocale()),
            'update-processing-circuit-my-institution' => __("permissions.admin.update_processing_circuit_my_institution", [], app()->getLocale()),
            'list-staff-from-my-unit' => __("permissions.admin.list_staff_from_my_unit", [], app()->getLocale()),
            'store-staff-from-my-unit' => __("permissions.admin.store_staff_from_my_unit", [], app()->getLocale()),
            'update-staff-from-my-unit' => __("permissions.admin.update_staff_from_my_unit", [], app()->getLocale()),
            'destroy-staff-from-my-unit' => __("permissions.admin.destroy_staff_from_my_unit", [], app()->getLocale()),
            'show-staff-from-my-unit' => __("permissions.admin.show_staff_from_my_unit", [], app()->getLocale()),
            'list-user-my-institution' => __("permissions.admin.list_user_my_institution", [], app()->getLocale()),
            'show-user-my-institution' => __("permissions.admin.show_user_my_institution", [], app()->getLocale()),
            'store-user-my-institution' => __("permissions.admin.store_user_my_institution", [], app()->getLocale()),
            'list-my-institution-type-role' => __("permissions.admin.list_my_institution_type_role", [], app()->getLocale()),
            'show-my-institution-type-role' => __("permissions.admin.show_my_institution_type_role", [], app()->getLocale()),
            'store-my-institution-type-role' => __("permissions.admin.store_my_institution_type_role", [], app()->getLocale()),
            'update-my-institution-type-role' => __("permissions.admin.update_my_institution_type_role", [], app()->getLocale()),
            'destroy-my-institution-type-role' => __("permissions.admin.destroy_my_institution_type_role", [], app()->getLocale()),
            'search-claim-my-reference' => __("permissions.admin.search_claim_my_reference", [], app()->getLocale()),
            'my-email-claim-configuration' => __("permissions.admin.my_email_claim_configuration", [], app()->getLocale()),
            'list-notification-proof' => __("permissions.admin.list_notification_proof", [], app()->getLocale()),
            'list-without-link-unit' => __("permissions.admin.list_without_link_unit", [], app()->getLocale()),
            'store-without-link-unit' => __("permissions.admin.store_without_link_unit", [], app()->getLocale()),
            'update-without-link-unit' => __("permissions.admin.update_without_link_unit", [], app()->getLocale()),
            'destroy-without-link-unit' => __("permissions.admin.destroy_without_link_unit", [], app()->getLocale()),
            'show-without-link-unit' => __("permissions.admin.show_without_link_unit", [], app()->getLocale()),
            'update-processiong-circuit-without-institution' => __("permissions.admin.update_processiong_circuit_without_institution", [], app()->getLocale()),
            'list-relationship' => __("permissions.admin.list_relationship", [], app()->getLocale()),
            'store-relationship' => __("permissions.admin.store_relationship", [], app()->getLocale()),
            'update-relationship' => __("permissions.admin.update_relationship", [], app()->getLocale()),
            'destroy-relationship' => __("permissions.admin.destroy_relationship", [], app()->getLocale()),
            'show-relationship' => __("permissions.admin.show_relationship", [], app()->getLocale()),
            'list-staff-from-maybe-no-unit' => __("permissions.admin.list_staff_from_maybe_no_unit", [], app()->getLocale()),
            'store-staff-from-maybe-no-unit' => __("permissions.admin.store_staff_from_maybe_no_unit", [], app()->getLocale()),
            'update-staff-from-maybe-no-unit' => __("permissions.admin.update_staff_from_maybe_no_unit", [], app()->getLocale()),
            'destroy-staff-from-maybe-no-unit' => __("permissions.admin.destroy_staff_from_maybe_no_unit", [], app()->getLocale()),
            'show-staff-from-maybe-no-unit' => __("permissions.admin.show_staff_from_maybe_no_unit", [], app()->getLocale()),
            "any-email-claim-configuration" => __("permissions.admin.any_email_claim_configuration", [], app()->getLocale()),
            'list-system-usage-reporting' => __("permissions.admin.list_system_usage_reporting", [], app()->getLocale()),
            'list-benchmarking-reporting' => __("permissions.admin.list_benchmarking_reporting", [], app()->getLocale()),
            'list-global-reporting' => __("permissions.admin.list_global_reporting", [], app()->getLocale()),
            'configure-pilot-collector-discussion-attribute' => __("permissions.admin.configure_pilot_collector_discussion_attribute", [], app()->getLocale()),
            'show-proxy-config' => __("permissions.admin.show_proxy_config", [], app()->getLocale()),
            'update-proxy-config' => __("permissions.admin.update_proxy_config", [], app()->getLocale()),
            'delete-proxy-config' => __("permissions.admin.delete_proxy_config", [], app()->getLocale()),

            'config-reporting-claim-my-institution' => __("permissions.admin.config_reporting_claim_my_institution", [],app()->getLocale()),
            'list-config-reporting-claim-my-institution' => __("permissions.admin.list_config_reporting_claim_my_institution",[],app()->getLocale()),
            'store-config-reporting-claim-my-institution' => __("permissions.admin.store_config_reporting_claim_my_institution",[],app()->getLocale()),
            'update-config-reporting-claim-my-institution' => __("permissions.admin.update_config_reporting_claim_my_institution",[],app()->getLocale()),
            'delete-config-reporting-claim-my-institution' => __("permissions.admin.delete_config_reporting_claim_my_institution",[],app()->getLocale()),
            'list-reporting-titles-configs' => __("permissions.admin.list_reporting_titles_configs",[],app()->getLocale()),
            'update-reporting-titles-configs' => __("permissions.admin.update_reporting_titles_config",[],app()->getLocale()),
            'edit-reporting-titles-configs' => __("permissions.admin.edit_reporting_titles_config",[],app()->getLocale()),
            'list-escalation-config' => __("permissions.admin.list_escalation_config",[],app()->getLocale()),
            'update-escalation-config' => __("permissions.admin.update_escalation_config",[],app()->getLocale()),
            'logout-user-my-institution' => __("permissions.admin.logout_user_my_institution",[],app()->getLocale()),
            'bci-monthly-reports' => __("permissions.admin.bci_monthly_reports",[],app()->getLocale()),
            'bci-annual-reports' => __("permissions.admin.bci_annual_reports",[],app()->getLocale()),
            'export-notification-proof' => __("permissions.admin.export_notification_proof",[],app()->getLocale()),
            'configuration-pilot' => __("permissions.admin.configuration_pilot",[],app()->getLocale()),
            'list-webhooks-config' => __("permissions.admin.list_webhooks_config",[],app()->getLocale()),
            'store-webhooks-config' => __("permissions.admin.store_webhooks_config",[],app()->getLocale()),
            'update-webhooks-config' => __("permissions.admin.update_webhooks_config",[],app()->getLocale()),
            'delete-webhooks-config' => __("permissions.admin.delete_webhooks_config",[],app()->getLocale()),
            'show-configuration-quota-delay' => __("permissions.admin.show_configuration_quota_delay",[],app()->getLocale()),
            'update-configuration-quota-delay' => __("permissions.admin.update_configuration_quota_delay",[],app()->getLocale()),
            'update-satisfaction-data-config' => __("permissions.admin.update_satisfaction_data_config", [], app()->getLocale()),
            'access-satisfaction-data-config' => __("permissions.admin.access_satisfaction_data_config", [], app()->getLocale()),
        ];

        foreach ($admin as $name => $description) {
            $checkPermission = Permission::where('name', $name)->where('guard_name', 'api')->first();
            if ($checkPermission != null)
                $checkPermission->update(["description" => $description]);
        }

        //pilot and collector
        $pilot = [
            'list-claim-awaiting-assignment' => __("permissions.pilot.list_claim_awaiting_assignment", [], app()->getLocale()),
            'show-claim-awaiting-assignment' => __("permissions.pilot.show_claim_awaiting_assignment", [], app()->getLocale()),
            'merge-claim-awaiting-assignment' => __("permissions.pilot.merge_claim_awaiting_assignment", [], app()->getLocale()),
            'store-claim-against-any-institution' => __("permissions.pilot.store_claim_against_any_institution", [], app()->getLocale()),
            'list-claim-awaiting-validation-my-institution' => __("permissions.pilot.list_claim_awaiting_validation_my_institution", [], app()->getLocale()),
            'show-claim-awaiting-validation-my-institution' => __("permissions.pilot.show_claim_awaiting_validation_my_institution", [], app()->getLocale()),
            'validate-treatment-my-institution' => __("permissions.pilot.validate_treatment_my_institution", [], app()->getLocale()),
            'list-satisfaction-measured-my-claim' => __("permissions.pilot.list_satisfaction_measured_my_claim", [], app()->getLocale()),
            'update-satisfaction-measured-my-claim' => __("permissions.pilot.update_satisfaction_measured_my_claim", [], app()->getLocale()),
            'show-dashboard-data-all-institution' => __("permissions.pilot.show_dashboard_data_all_institution", [], app()->getLocale()),
            'show-dashboard-data-my-institution' => __("permissions.pilot.show_dashboard_data_my_institution", [], app()->getLocale()),
            'list-my-discussions' => __("permissions.pilot.list_my_discussions", [], app()->getLocale()),
            'list-discussion-contributors' => __("permissions.pilot.list_discussion_contributors", [], app()->getLocale()),
            'contribute-discussion' => __("permissions.pilot.contribute_discussion", [], app()->getLocale()),
            'list-monitoring-claim-any-institution' => __("permissions.pilot.list_monitoring_claim_any_institution", [], app()->getLocale()),
            'list-reporting-claim-any-institution' => __("permissions.pilot.list_reporting_claim_any_institution", [], app()->getLocale()),
            'transfer-claim-to-circuit-unit' => __("permissions.pilot.transfer_claim_to_circuit_unit", [], app()->getLocale()),
            'transfer-claim-to-targeted-institution' => __("permissions.pilot.transfer_claim_to_targeted_institution", [], app()->getLocale()),
            'list-claim-incomplete-against-any-institution' => __("permissions.pilot.list_claim_incomplete_against_any_institution", [], app()->getLocale()),
            'show-claim-incomplete-against-any-institution' => __("permissions.pilot.show_claim_incomplete_against_any_institution", [], app()->getLocale()),
            'update-claim-incomplete-against-any-institution' => __("permissions.pilot.update_claim_incomplete_against_any_institution", [], app()->getLocale()),
            'list-any-claim-archived' => __("permissions.pilot.list_any_claim_archived", [], app()->getLocale()),
            'show-any-claim-archived' => __("permissions.pilot.show_any_claim_archived", [], app()->getLocale()),
            'history-list-create-claim' => __("permissions.pilot.history_list_create_claim", [], app()->getLocale()),
            'update-active-pilot' => __("permissions.pilot.update_active_pilot", [], app()->getLocale()),
            'unfounded-claim-awaiting-assignment' => __("permissions.pilot.unfounded_claim_awaiting_assignment", [], app()->getLocale()),
            'attach-files-to-claim' => __("permissions.pilot.attach_files_to_claim", [], app()->getLocale()),
            'revive-staff' => __("permissions.pilot.revive_staff", [], app()->getLocale()),
            'pilot-list-any-notification-proof' => __("permissions.pilot.pilot_list_any_notification_proof", [], app()->getLocale()),
            'store-claim-against-my-institution' => __("permissions.pilot.store_claim_against_my_institution", [], app()->getLocale()),
            'list-my-claim-archived' => __("permissions.pilot.list_my_claim_archived", [], app()->getLocale()),
            'show-my-claim-archived' => __("permissions.pilot.show_my_claim_archived", [], app()->getLocale()),
            'list-monitoring-claim-my-institution' => __("permissions.pilot.list_monitoring_claim_my_institution", [], app()->getLocale()),
            'list-reporting-claim-my-institution' => __("permissions.pilot.list_reporting_claim_my_institution", [], app()->getLocale()),
            'list-claim-incomplete-against-my-institution' => __("permissions.pilot.list_claim_incomplete_against_my_institution", [], app()->getLocale()),
            'show-claim-incomplete-against-my-institution' => __("permissions.pilot.show_claim_incomplete_against_my_institution", [], app()->getLocale()),
            'update-claim-incomplete-against-my-institution' => __("permissions.pilot.update_claim_incomplete_against_my_institution", [], app()->getLocale()),
            'pilot-list-notification-proof' => __("permissions.pilot.pilot_list_notification_proof", [], app()->getLocale()),
            'store-claim-without-client' => __("permissions.pilot.store_claim_without_client", [], app()->getLocale()),
            'list-claim-awaiting-validation-any-institution' => __("permissions.pilot.list_claim_awaiting_validation_any_institution", [], app()->getLocale()),
            'show-claim-awaiting-validation-any-institution' => __("permissions.pilot.show_claim_awaiting_validation_any_institution", [], app()->getLocale()),
            'validate-treatment-any-institution' => __("permissions.pilot.validate_treatment_any_institution", [], app()->getLocale()),
            'list-satisfaction-measured-any-claim' => __("permissions.pilot.list_satisfaction_measured_any_claim", [], app()->getLocale()),
            'update-satisfaction-measured-any-claim' => __("permissions.pilot.update_satisfaction_measured_any_claim", [], app()->getLocale()),
            'transfer-claim-to-unit' => __("permissions.pilot.transfer_claim_to_unit", [], app()->getLocale()),
            'list-claim-incomplete-without-client' => __("permissions.pilot.list_claim_incomplete_without_client", [], app()->getLocale()),
            'show-claim-incomplete-without-client' => __("permissions.pilot.show_claim_incomplete_without_client", [], app()->getLocale()),
            'update-claim-incomplete-without-client' => __("permissions.pilot.update_claim_incomplete_without_client", [], app()->getLocale()),
            'list-system-usage-reporting' => __("permissions.pilot.list_system_usage_reporting", [], app()->getLocale()),
            'list-benchmarking-reporting' => __("permissions.pilot.list_benchmarking_reporting", [], app()->getLocale()),
            'list-global-reporting' => __("permissions.pilot.list_global_reporting", [], app()->getLocale()),

            'pilot-export-notification-proof' => __("permissions.pilot.export_notification_proof", [], app()->getLocale()),
            'pilot-relance-other' => __("permissions.pilot.pilot_relance_other", [], app()->getLocale()),
            'reassignment_to_pilot' => __("permissions.pilot.reassignment_to_pilot", [], app()->getLocale()),
            'list-claim-transferred-my-institution' => __("permissions.pilot.list_claim_transferred_my_institution", [], app()->getLocale()),
            'list-regulatory-reporting-claim-my-institution' => __("permissions.pilot.list_regulatory_reporting_claim_my_institution", [], app()->getLocale()),
            'system-any-efficiency-report' => __("permissions.pilot.system_any_efficiency_report", [], app()->getLocale()),
            'list-my-claim-unsatisfied' => __("permissions.pilot.list_my_claim_unsatisfied", [], app()->getLocale()),
            'list-closed-my-claims' => __("permissions.pilot.list_closed_my_claims", [], app()->getLocale()),
            'close-my-claims' => __("permissions.pilot.close_my_claims", [], app()->getLocale()),
            'list-treatment-board' => __("permissions.pilot.list_treatment_board", [], app()->getLocale()),
            'store-treatment-board' => __("permissions.pilot.store_treatment_board", [], app()->getLocale()),
            'update-treatment-board' => __("permissions.pilot.update_treatment_board", [], app()->getLocale()),
            'destroy-treatment-board' => __("permissions.pilot.destroy_treatment_board", [], app()->getLocale()),
            'system-my-efficiency-report' => __("permissions.pilot.system_my_efficiency_report", [], app()->getLocale()),

            'staff-list-satisfaction-measured-my-claim' => __("permissions.pilot.staff_list_satisfaction_measured_my_claim", [], app()->getLocale()),
            'affect-claim-for-satisfaction' => __("permissions.pilot.affect_claim_for_satisfaction", [], app()->getLocale()),
            'auto-affect-claim-for-satisfaction-collector' => __("permissions.pilot.auto_affect_claim_for_satisfaction_collector", [], app()->getLocale())

        ];

        foreach ($pilot as $name => $description) {
            $checkPermission = Permission::where('name', $name)->where('guard_name', 'api')->first();
            if ($checkPermission != null)
                $checkPermission->update(["description" => $description]);
        }

        //staff
        $staff = [
            'list-claim-awaiting-treatment' => __("permissions.staff.list_claim_awaiting_treatment", [], app()->getLocale()),
            'show-claim-awaiting-treatment' => __("permissions.staff.show_claim_awaiting_treatment", [], app()->getLocale()),
            'rejected-claim-awaiting-treatment' => __("permissions.staff.rejected_claim_awaiting_treatment", [], app()->getLocale()),
            'self-assignment-claim-awaiting-treatment' => __("permissions.staff.self_assignment_claim_awaiting_treatment", [], app()->getLocale()),
            'assignment-claim-awaiting-treatment' => __("permissions.staff.assignment_claim_awaiting_treatment", [], app()->getLocale()),
            'list-claim-assignment-to-staff' => __("permissions.staff.list_claim_assignment_to_staff", [], app()->getLocale()),
            'show-claim-assignment-to-staff' => __("permissions.staff.show_claim_assignment_to_staff", [], app()->getLocale()),
            'store-discussion' => __("permissions.staff.store_discussion", [], app()->getLocale()),
            'destroy-discussion' => __("permissions.staff.destroy_discussion", [], app()->getLocale()),
            'add-discussion-contributor' => __("permissions.staff.add_discussion_contributor", [], app()->getLocale()),
            'remove-discussion-contributor' => __("permissions.staff.remove_discussion_contributor", [], app()->getLocale()),
            'contribute-discussion' => __("permissions.staff.contribute_discussion", [], app()->getLocale()),
            'show-dashboard-data-my-unit' => __("permissions.staff.show_dashboard_data_my_unit", [], app()->getLocale()),
            'show-dashboard-data-my-activity' => __("permissions.staff.show_dashboard_data_my_activity", [], app()->getLocale()),
            'history-list-treat-claim' => __("permissions.staff.history_list_treat_claim", [], app()->getLocale()),
            'show-my-staff-monitoring' => __("permissions.staff.show_my_staff_monitoring", [], app()->getLocale()),

            'list-staff-revivals' => __("permissions.staff.list_staff_revivals", [], app()->getLocale()),
            'list-unit-revivals' => __("permissions.staff.list_unit_revivals", [], app()->getLocale()),


        ];

        foreach ($staff as $name => $description) {
            $checkPermission = Permission::where('name', $name)->where('guard_name', 'api')->first();
            if ($checkPermission != null)
                $checkPermission->update(["description" => $description]);
        }
    }
}

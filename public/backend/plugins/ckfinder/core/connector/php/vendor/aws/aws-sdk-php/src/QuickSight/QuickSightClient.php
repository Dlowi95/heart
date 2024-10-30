<?php
namespace Aws\QuickSight;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon QuickSight** service.
 * @method \Aws\Result cancelIngestion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelIngestionAsync(array $args = [])
 * @method \Aws\Result createAccountCustomization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccountCustomizationAsync(array $args = [])
 * @method \Aws\Result createAccountSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAccountSubscriptionAsync(array $args = [])
 * @method \Aws\Result createAnalysis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAnalysisAsync(array $args = [])
 * @method \Aws\Result createDashboard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDashboardAsync(array $args = [])
 * @method \Aws\Result createDataSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataSetAsync(array $args = [])
 * @method \Aws\Result createDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDataSourceAsync(array $args = [])
 * @method \Aws\Result createFolder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFolderAsync(array $args = [])
 * @method \Aws\Result createFolderMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFolderMembershipAsync(array $args = [])
 * @method \Aws\Result createGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupAsync(array $args = [])
 * @method \Aws\Result createGroupMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGroupMembershipAsync(array $args = [])
 * @method \Aws\Result createIAMPolicyAssignment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIAMPolicyAssignmentAsync(array $args = [])
 * @method \Aws\Result createIngestion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIngestionAsync(array $args = [])
 * @method \Aws\Result createNamespace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNamespaceAsync(array $args = [])
 * @method \Aws\Result createTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTemplateAsync(array $args = [])
 * @method \Aws\Result createTemplateAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTemplateAliasAsync(array $args = [])
 * @method \Aws\Result createTheme(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createThemeAsync(array $args = [])
 * @method \Aws\Result createThemeAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createThemeAliasAsync(array $args = [])
 * @method \Aws\Result deleteAccountCustomization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAccountCustomizationAsync(array $args = [])
 * @method \Aws\Result deleteAnalysis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAnalysisAsync(array $args = [])
 * @method \Aws\Result deleteDashboard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDashboardAsync(array $args = [])
 * @method \Aws\Result deleteDataSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataSetAsync(array $args = [])
 * @method \Aws\Result deleteDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDataSourceAsync(array $args = [])
 * @method \Aws\Result deleteFolder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFolderAsync(array $args = [])
 * @method \Aws\Result deleteFolderMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFolderMembershipAsync(array $args = [])
 * @method \Aws\Result deleteGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupAsync(array $args = [])
 * @method \Aws\Result deleteGroupMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGroupMembershipAsync(array $args = [])
 * @method \Aws\Result deleteIAMPolicyAssignment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIAMPolicyAssignmentAsync(array $args = [])
 * @method \Aws\Result deleteNamespace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNamespaceAsync(array $args = [])
 * @method \Aws\Result deleteTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTemplateAsync(array $args = [])
 * @method \Aws\Result deleteTemplateAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTemplateAliasAsync(array $args = [])
 * @method \Aws\Result deleteTheme(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteThemeAsync(array $args = [])
 * @method \Aws\Result deleteThemeAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteThemeAliasAsync(array $args = [])
 * @method \Aws\Result deleteUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserAsync(array $args = [])
 * @method \Aws\Result deleteUserByPrincipalId(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteUserByPrincipalIdAsync(array $args = [])
 * @method \Aws\Result describeAccountCustomization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountCustomizationAsync(array $args = [])
 * @method \Aws\Result describeAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountSettingsAsync(array $args = [])
 * @method \Aws\Result describeAccountSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountSubscriptionAsync(array $args = [])
 * @method \Aws\Result describeAnalysis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAnalysisAsync(array $args = [])
 * @method \Aws\Result describeAnalysisPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAnalysisPermissionsAsync(array $args = [])
 * @method \Aws\Result describeDashboard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDashboardAsync(array $args = [])
 * @method \Aws\Result describeDashboardPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDashboardPermissionsAsync(array $args = [])
 * @method \Aws\Result describeDataSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDataSetAsync(array $args = [])
 * @method \Aws\Result describeDataSetPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDataSetPermissionsAsync(array $args = [])
 * @method \Aws\Result describeDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDataSourceAsync(array $args = [])
 * @method \Aws\Result describeDataSourcePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDataSourcePermissionsAsync(array $args = [])
 * @method \Aws\Result describeFolder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFolderAsync(array $args = [])
 * @method \Aws\Result describeFolderPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFolderPermissionsAsync(array $args = [])
 * @method \Aws\Result describeFolderResolvedPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFolderResolvedPermissionsAsync(array $args = [])
 * @method \Aws\Result describeGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupAsync(array $args = [])
 * @method \Aws\Result describeGroupMembership(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeGroupMembershipAsync(array $args = [])
 * @method \Aws\Result describeIAMPolicyAssignment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIAMPolicyAssignmentAsync(array $args = [])
 * @method \Aws\Result describeIngestion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIngestionAsync(array $args = [])
 * @method \Aws\Result describeIpRestriction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpRestrictionAsync(array $args = [])
 * @method \Aws\Result describeNamespace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNamespaceAsync(array $args = [])
 * @method \Aws\Result describeTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTemplateAsync(array $args = [])
 * @method \Aws\Result describeTemplateAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTemplateAliasAsync(array $args = [])
 * @method \Aws\Result describeTemplatePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTemplatePermissionsAsync(array $args = [])
 * @method \Aws\Result describeTheme(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeThemeAsync(array $args = [])
 * @method \Aws\Result describeThemeAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeThemeAliasAsync(array $args = [])
 * @method \Aws\Result describeThemePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeThemePermissionsAsync(array $args = [])
 * @method \Aws\Result describeUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeUserAsync(array $args = [])
 * @method \Aws\Result generateEmbedUrlForAnonymousUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateEmbedUrlForAnonymousUserAsync(array $args = [])
 * @method \Aws\Result generateEmbedUrlForRegisteredUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateEmbedUrlForRegisteredUserAsync(array $args = [])
 * @method \Aws\Result getDashboardEmbedUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDashboardEmbedUrlAsync(array $args = [])
 * @method \Aws\Result getSessionEmbedUrl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSessionEmbedUrlAsync(array $args = [])
 * @method \Aws\Result listAnalyses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAnalysesAsync(array $args = [])
 * @method \Aws\Result listDashboardVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDashboardVersionsAsync(array $args = [])
 * @method \Aws\Result listDashboards(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDashboardsAsync(array $args = [])
 * @method \Aws\Result listDataSets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataSetsAsync(array $args = [])
 * @method \Aws\Result listDataSources(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDataSourcesAsync(array $args = [])
 * @method \Aws\Result listFolderMembers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFolderMembersAsync(array $args = [])
 * @method \Aws\Result listFolders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFoldersAsync(array $args = [])
 * @method \Aws\Result listGroupMemberships(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupMembershipsAsync(array $args = [])
 * @method \Aws\Result listGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listGroupsAsync(array $args = [])
 * @method \Aws\Result listIAMPolicyAssignments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIAMPolicyAssignmentsAsync(array $args = [])
 * @method \Aws\Result listIAMPolicyAssignmentsForUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIAMPolicyAssignmentsForUserAsync(array $args = [])
 * @method \Aws\Result listIngestions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIngestionsAsync(array $args = [])
 * @method \Aws\Result listNamespaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listNamespacesAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listTemplateAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTemplateAliasesAsync(array $args = [])
 * @method \Aws\Result listTemplateVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTemplateVersionsAsync(array $args = [])
 * @method \Aws\Result listTemplates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTemplatesAsync(array $args = [])
 * @method \Aws\Result listThemeAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThemeAliasesAsync(array $args = [])
 * @method \Aws\Result listThemeVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThemeVersionsAsync(array $args = [])
 * @method \Aws\Result listThemes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listThemesAsync(array $args = [])
 * @method \Aws\Result listUserGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUserGroupsAsync(array $args = [])
 * @method \Aws\Result listUsers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsersAsync(array $args = [])
 * @method \Aws\Result registerUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerUserAsync(array $args = [])
 * @method \Aws\Result restoreAnalysis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreAnalysisAsync(array $args = [])
 * @method \Aws\Result searchAnalyses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchAnalysesAsync(array $args = [])
 * @method \Aws\Result searchDashboards(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchDashboardsAsync(array $args = [])
 * @method \Aws\Result searchFolders(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchFoldersAsync(array $args = [])
 * @method \Aws\Result searchGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchGroupsAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAccountCustomization(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccountCustomizationAsync(array $args = [])
 * @method \Aws\Result updateAccountSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAccountSettingsAsync(array $args = [])
 * @method \Aws\Result updateAnalysis(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAnalysisAsync(array $args = [])
 * @method \Aws\Result updateAnalysisPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAnalysisPermissionsAsync(array $args = [])
 * @method \Aws\Result updateDashboard(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDashboardAsync(array $args = [])
 * @method \Aws\Result updateDashboardPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDashboardPermissionsAsync(array $args = [])
 * @method \Aws\Result updateDashboardPublishedVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDashboardPublishedVersionAsync(array $args = [])
 * @method \Aws\Result updateDataSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDataSetAsync(array $args = [])
 * @method \Aws\Result updateDataSetPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDataSetPermissionsAsync(array $args = [])
 * @method \Aws\Result updateDataSource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDataSourceAsync(array $args = [])
 * @method \Aws\Result updateDataSourcePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDataSourcePermissionsAsync(array $args = [])
 * @method \Aws\Result updateFolder(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFolderAsync(array $args = [])
 * @method \Aws\Result updateFolderPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFolderPermissionsAsync(array $args = [])
 * @method \Aws\Result updateGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateGroupAsync(array $args = [])
 * @method \Aws\Result updateIAMPolicyAssignment(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIAMPolicyAssignmentAsync(array $args = [])
 * @method \Aws\Result updateIpRestriction(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateIpRestrictionAsync(array $args = [])
 * @method \Aws\Result updatePublicSharingSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePublicSharingSettingsAsync(array $args = [])
 * @method \Aws\Result updateTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTemplateAsync(array $args = [])
 * @method \Aws\Result updateTemplateAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTemplateAliasAsync(array $args = [])
 * @method \Aws\Result updateTemplatePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTemplatePermissionsAsync(array $args = [])
 * @method \Aws\Result updateTheme(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateThemeAsync(array $args = [])
 * @method \Aws\Result updateThemeAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateThemeAliasAsync(array $args = [])
 * @method \Aws\Result updateThemePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateThemePermissionsAsync(array $args = [])
 * @method \Aws\Result updateUser(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateUserAsync(array $args = [])
 */
class QuickSightClient extends AwsClient {}

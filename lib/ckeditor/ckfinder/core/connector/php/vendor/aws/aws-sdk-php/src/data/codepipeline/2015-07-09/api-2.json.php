<?php
// This file was auto-generated from sdk-root/src/data/codepipeline/2015-07-09/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2015-07-09', 'endpointPrefix' => 'codepipeline', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'CodePipeline', 'serviceFullName' => 'AWS CodePipeline', 'signatureVersion' => 'v4', 'targetPrefix' => 'CodePipeline_20150709', 'uid' => 'codepipeline-2015-07-09', ], 'operations' => [ 'AcknowledgeJob' => [ 'name' => 'AcknowledgeJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'AcknowledgeJobInput', ], 'output' => [ 'shape' => 'AcknowledgeJobOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidNonceException', ], [ 'shape' => 'JobNotFoundException', ], ], ], 'AcknowledgeThirdPartyJob' => [ 'name' => 'AcknowledgeThirdPartyJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'AcknowledgeThirdPartyJobInput', ], 'output' => [ 'shape' => 'AcknowledgeThirdPartyJobOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidNonceException', ], [ 'shape' => 'JobNotFoundException', ], [ 'shape' => 'InvalidClientTokenException', ], ], ], 'CreateCustomActionType' => [ 'name' => 'CreateCustomActionType', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateCustomActionTypeInput', ], 'output' => [ 'shape' => 'CreateCustomActionTypeOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'CreatePipeline' => [ 'name' => 'CreatePipeline', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreatePipelineInput', ], 'output' => [ 'shape' => 'CreatePipelineOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'PipelineNameInUseException', ], [ 'shape' => 'InvalidStageDeclarationException', ], [ 'shape' => 'InvalidActionDeclarationException', ], [ 'shape' => 'InvalidBlockerDeclarationException', ], [ 'shape' => 'InvalidStructureException', ], [ 'shape' => 'LimitExceededException', ], ], ], 'DeleteCustomActionType' => [ 'name' => 'DeleteCustomActionType', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteCustomActionTypeInput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], ], ], 'DeletePipeline' => [ 'name' => 'DeletePipeline', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeletePipelineInput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], ], ], 'DisableStageTransition' => [ 'name' => 'DisableStageTransition', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DisableStageTransitionInput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'PipelineNotFoundException', ], [ 'shape' => 'StageNotFoundException', ], ], ], 'EnableStageTransition' => [ 'name' => 'EnableStageTransition', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'EnableStageTransitionInput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'PipelineNotFoundException', ], [ 'shape' => 'StageNotFoundException', ], ], ], 'GetJobDetails' => [ 'name' => 'GetJobDetails', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetJobDetailsInput', ], 'output' => [ 'shape' => 'GetJobDetailsOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'JobNotFoundException', ], ], ], 'GetPipeline' => [ 'name' => 'GetPipeline', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetPipelineInput', ], 'output' => [ 'shape' => 'GetPipelineOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'PipelineNotFoundException', ], [ 'shape' => 'PipelineVersionNotFoundException', ], ], ], 'GetPipelineExecution' => [ 'name' => 'GetPipelineExecution', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetPipelineExecutionInput', ], 'output' => [ 'shape' => 'GetPipelineExecutionOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'PipelineNotFoundException', ], [ 'shape' => 'PipelineExecutionNotFoundException', ], ], ], 'GetPipelineState' => [ 'name' => 'GetPipelineState', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetPipelineStateInput', ], 'output' => [ 'shape' => 'GetPipelineStateOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'PipelineNotFoundException', ], ], ], 'GetThirdPartyJobDetails' => [ 'name' => 'GetThirdPartyJobDetails', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'GetThirdPartyJobDetailsInput', ], 'output' => [ 'shape' => 'GetThirdPartyJobDetailsOutput', ], 'errors' => [ [ 'shape' => 'JobNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidClientTokenException', ], [ 'shape' => 'InvalidJobException', ], ], ], 'ListActionTypes' => [ 'name' => 'ListActionTypes', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListActionTypesInput', ], 'output' => [ 'shape' => 'ListActionTypesOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidNextTokenException', ], ], ], 'ListPipelineExecutions' => [ 'name' => 'ListPipelineExecutions', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListPipelineExecutionsInput', ], 'output' => [ 'shape' => 'ListPipelineExecutionsOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'PipelineNotFoundException', ], [ 'shape' => 'InvalidNextTokenException', ], ], ], 'ListPipelines' => [ 'name' => 'ListPipelines', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListPipelinesInput', ], 'output' => [ 'shape' => 'ListPipelinesOutput', ], 'errors' => [ [ 'shape' => 'InvalidNextTokenException', ], ], ], 'PollForJobs' => [ 'name' => 'PollForJobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PollForJobsInput', ], 'output' => [ 'shape' => 'PollForJobsOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ActionTypeNotFoundException', ], ], ], 'PollForThirdPartyJobs' => [ 'name' => 'PollForThirdPartyJobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PollForThirdPartyJobsInput', ], 'output' => [ 'shape' => 'PollForThirdPartyJobsOutput', ], 'errors' => [ [ 'shape' => 'ActionTypeNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'PutActionRevision' => [ 'name' => 'PutActionRevision', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutActionRevisionInput', ], 'output' => [ 'shape' => 'PutActionRevisionOutput', ], 'errors' => [ [ 'shape' => 'PipelineNotFoundException', ], [ 'shape' => 'StageNotFoundException', ], [ 'shape' => 'ActionNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'PutApprovalResult' => [ 'name' => 'PutApprovalResult', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutApprovalResultInput', ], 'output' => [ 'shape' => 'PutApprovalResultOutput', ], 'errors' => [ [ 'shape' => 'InvalidApprovalTokenException', ], [ 'shape' => 'ApprovalAlreadyCompletedException', ], [ 'shape' => 'PipelineNotFoundException', ], [ 'shape' => 'StageNotFoundException', ], [ 'shape' => 'ActionNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'PutJobFailureResult' => [ 'name' => 'PutJobFailureResult', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutJobFailureResultInput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'JobNotFoundException', ], [ 'shape' => 'InvalidJobStateException', ], ], ], 'PutJobSuccessResult' => [ 'name' => 'PutJobSuccessResult', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutJobSuccessResultInput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'JobNotFoundException', ], [ 'shape' => 'InvalidJobStateException', ], ], ], 'PutThirdPartyJobFailureResult' => [ 'name' => 'PutThirdPartyJobFailureResult', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutThirdPartyJobFailureResultInput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'JobNotFoundException', ], [ 'shape' => 'InvalidJobStateException', ], [ 'shape' => 'InvalidClientTokenException', ], ], ], 'PutThirdPartyJobSuccessResult' => [ 'name' => 'PutThirdPartyJobSuccessResult', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'PutThirdPartyJobSuccessResultInput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'JobNotFoundException', ], [ 'shape' => 'InvalidJobStateException', ], [ 'shape' => 'InvalidClientTokenException', ], ], ], 'RetryStageExecution' => [ 'name' => 'RetryStageExecution', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RetryStageExecutionInput', ], 'output' => [ 'shape' => 'RetryStageExecutionOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'PipelineNotFoundException', ], [ 'shape' => 'StageNotFoundException', ], [ 'shape' => 'StageNotRetryableException', ], [ 'shape' => 'NotLatestPipelineExecutionException', ], ], ], 'StartPipelineExecution' => [ 'name' => 'StartPipelineExecution', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'StartPipelineExecutionInput', ], 'output' => [ 'shape' => 'StartPipelineExecutionOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'PipelineNotFoundException', ], ], ], 'UpdatePipeline' => [ 'name' => 'UpdatePipeline', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdatePipelineInput', ], 'output' => [ 'shape' => 'UpdatePipelineOutput', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'InvalidStageDeclarationException', ], [ 'shape' => 'InvalidActionDeclarationException', ], [ 'shape' => 'InvalidBlockerDeclarationException', ], [ 'shape' => 'InvalidStructureException', ], ], ], ], 'shapes' => [ 'AWSSessionCredentials' => [ 'type' => 'structure', 'required' => [ 'accessKeyId', 'secretAccessKey', 'sessionToken', ], 'members' => [ 'accessKeyId' => [ 'shape' => 'AccessKeyId', ], 'secretAccessKey' => [ 'shape' => 'SecretAccessKey', ], 'sessionToken' => [ 'shape' => 'SessionToken', ], ], 'sensitive' => true, ], 'AccessKeyId' => [ 'type' => 'string', ], 'AccountId' => [ 'type' => 'string', 'pattern' => '[0-9]{12}', ], 'AcknowledgeJobInput' => [ 'type' => 'structure', 'required' => [ 'jobId', 'nonce', ], 'members' => [ 'jobId' => [ 'shape' => 'JobId', ], 'nonce' => [ 'shape' => 'Nonce', ], ], ], 'AcknowledgeJobOutput' => [ 'type' => 'structure', 'members' => [ 'status' => [ 'shape' => 'JobStatus', ], ], ], 'AcknowledgeThirdPartyJobInput' => [ 'type' => 'structure', 'required' => [ 'jobId', 'nonce', 'clientToken', ], 'members' => [ 'jobId' => [ 'shape' => 'ThirdPartyJobId', ], 'nonce' => [ 'shape' => 'Nonce', ], 'clientToken' => [ 'shape' => 'ClientToken', ], ], ], 'AcknowledgeThirdPartyJobOutput' => [ 'type' => 'structure', 'members' => [ 'status' => [ 'shape' => 'JobStatus', ], ], ], 'ActionCategory' => [ 'type' => 'string', 'enum' => [ 'Source', 'Build', 'Deploy', 'Test', 'Invoke', 'Approval', ], ], 'ActionConfiguration' => [ 'type' => 'structure', 'members' => [ 'configuration' => [ 'shape' => 'ActionConfigurationMap', ], ], ], 'ActionConfigurationKey' => [ 'type' => 'string', 'max' => 50, 'min' => 1, ], 'ActionConfigurationMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'ActionConfigurationKey', ], 'value' => [ 'shape' => 'ActionConfigurationValue', ], ], 'ActionConfigurationProperty' => [ 'type' => 'structure', 'required' => [ 'name', 'required', 'key', 'secret', ], 'members' => [ 'name' => [ 'shape' => 'ActionConfigurationKey', ], 'required' => [ 'shape' => 'Boolean', ], 'key' => [ 'shape' => 'Boolean', ], 'secret' => [ 'shape' => 'Boolean', ], 'queryable' => [ 'shape' => 'Boolean', ], 'description' => [ 'shape' => 'Description', ], 'type' => [ 'shape' => 'ActionConfigurationPropertyType', ], ], ], 'ActionConfigurationPropertyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ActionConfigurationProperty', ], 'max' => 10, ], 'ActionConfigurationPropertyType' => [ 'type' => 'string', 'enum' => [ 'String', 'Number', 'Boolean', ], ], 'ActionConfigurationQueryableValue' => [ 'type' => 'string', 'max' => 50, 'min' => 1, 'pattern' => '[a-zA-Z0-9_-]+', ], 'ActionConfigurationValue' => [ 'type' => 'string', 'max' => 1000, 'min' => 1, ], 'ActionContext' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'ActionName', ], ], ], 'ActionDeclaration' => [ 'type' => 'structure', 'required' => [ 'name', 'actionTypeId', ], 'members' => [ 'name' => [ 'shape' => 'ActionName', ], 'actionTypeId' => [ 'shape' => 'ActionTypeId', ], 'runOrder' => [ 'shape' => 'ActionRunOrder', ], 'configuration' => [ 'shape' => 'ActionConfigurationMap', ], 'outputArtifacts' => [ 'shape' => 'OutputArtifactList', ], 'inputArtifacts' => [ 'shape' => 'InputArtifactList', ], 'roleArn' => [ 'shape' => 'RoleArn', ], ], ], 'ActionExecution' => [ 'type' => 'structure', 'members' => [ 'status' => [ 'shape' => 'ActionExecutionStatus', ], 'summary' => [ 'shape' => 'ExecutionSummary', ], 'lastStatusChange' => [ 'shape' => 'Timestamp', ], 'token' => [ 'shape' => 'ActionExecutionToken', ], 'lastUpdatedBy' => [ 'shape' => 'LastUpdatedBy', ], 'externalExecutionId' => [ 'shape' => 'ExecutionId', ], 'externalExecutionUrl' => [ 'shape' => 'Url', ], 'percentComplete' => [ 'shape' => 'Percentage', ], 'errorDetails' => [ 'shape' => 'ErrorDetails', ], ], ], 'ActionExecutionStatus' => [ 'type' => 'string', 'enum' => [ 'InProgress', 'Succeeded', 'Failed', ], ], 'ActionExecutionToken' => [ 'type' => 'string', ], 'ActionName' => [ 'type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '[A-Za-z0-9.@\\-_]+', ], 'ActionNotFoundException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ActionOwner' => [ 'type' => 'string', 'enum' => [ 'AWS', 'ThirdParty', 'Custom', ], ], 'ActionProvider' => [ 'type' => 'string', 'max' => 25, 'min' => 1, 'pattern' => '[0-9A-Za-z_-]+', ], 'ActionRevision' => [ 'type' => 'structure', 'required' => [ 'revisionId', 'revisionChangeId', 'created', ], 'members' => [ 'revisionId' => [ 'shape' => 'Revision', ], 'revisionChangeId' => [ 'shape' => 'RevisionChangeIdentifier', ], 'created' => [ 'shape' => 'Timestamp', ], ], ], 'ActionRunOrder' => [ 'type' => 'integer', 'max' => 999, 'min' => 1, ], 'ActionState' => [ 'type' => 'structure', 'members' => [ 'actionName' => [ 'shape' => 'ActionName', ], 'currentRevision' => [ 'shape' => 'ActionRevision', ], 'latestExecution' => [ 'shape' => 'ActionExecution', ], 'entityUrl' => [ 'shape' => 'Url', ], 'revisionUrl' => [ 'shape' => 'Url', ], ], ], 'ActionStateList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ActionState', ], ], 'ActionType' => [ 'type' => 'structure', 'required' => [ 'id', 'inputArtifactDetails', 'outputArtifactDetails', ], 'members' => [ 'id' => [ 'shape' => 'ActionTypeId', ], 'settings' => [ 'shape' => 'ActionTypeSettings', ], 'actionConfigurationProperties' => [ 'shape' => 'ActionConfigurationPropertyList', ], 'inputArtifactDetails' => [ 'shape' => 'ArtifactDetails', ], 'outputArtifactDetails' => [ 'shape' => 'ArtifactDetails', ], ], ], 'ActionTypeId' => [ 'type' => 'structure', 'required' => [ 'category', 'owner', 'provider', 'version', ], 'members' => [ 'category' => [ 'shape' => 'ActionCategory', ], 'owner' => [ 'shape' => 'ActionOwner', ], 'provider' => [ 'shape' => 'ActionProvider', ], 'version' => [ 'shape' => 'Version', ], ], ], 'ActionTypeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ActionType', ], ], 'ActionTypeNotFoundException' => [ 'type' => 'structure', 'members' => [], 'exception' => true, ], 'ActionTypeSettings' => [ 'type' => 'structure', 'members' => [ 'thirdPartyConfigurationUrl' => [ 'shape' => 'Url', ], 'entityUrlTemplate' => [ 'shape' => 'UrlTemplate', ], 'executionUrlTemplate' => [ 'shape' => 'UrlTemplate', ], 'revisionUrlTemplate' => [ 'shape' => 'UrlTemplate', ], ], ], 'A0�\    0�\                    P
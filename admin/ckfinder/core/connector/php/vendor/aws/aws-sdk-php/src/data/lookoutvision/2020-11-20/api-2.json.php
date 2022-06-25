<?php
// This file was auto-generated from sdk-root/src/data/lookoutvision/2020-11-20/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2020-11-20', 'endpointPrefix' => 'lookoutvision', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon Lookout for Vision', 'serviceId' => 'LookoutVision', 'signatureVersion' => 'v4', 'signingName' => 'lookoutvision', 'uid' => 'lookoutvision-2020-11-20', ], 'operations' => [ 'CreateDataset' => [ 'name' => 'CreateDataset', 'http' => [ 'method' => 'POST', 'requestUri' => '/2020-11-20/projects/{projectName}/datasets', 'responseCode' => 202, ], 'input' => [ 'shape' => 'CreateDatasetRequest', ], 'output' => [ 'shape' => 'CreateDatasetResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'CreateModel' => [ 'name' => 'CreateModel', 'http' => [ 'method' => 'POST', 'requestUri' => '/2020-11-20/projects/{projectName}/models', 'responseCode' => 202, ], 'input' => [ 'shape' => 'CreateModelRequest', ], 'output' => [ 'shape' => 'CreateModelResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'CreateProject' => [ 'name' => 'CreateProject', 'http' => [ 'method' => 'POST', 'requestUri' => '/2020-11-20/projects', ], 'input' => [ 'shape' => 'CreateProjectRequest', ], 'output' => [ 'shape' => 'CreateProjectResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'DeleteDataset' => [ 'name' => 'DeleteDataset', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/2020-11-20/projects/{projectName}/datasets/{datasetType}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'DeleteDatasetRequest', ], 'output' => [ 'shape' => 'DeleteDatasetResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'DeleteModel' => [ 'name' => 'DeleteModel', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/2020-11-20/projects/{projectName}/models/{modelVersion}', 'responseCode' => 202, ], 'input' => [ 'shape' => 'DeleteModelRequest', ], 'output' => [ 'shape' => 'DeleteModelResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'DeleteProject' => [ 'name' => 'DeleteProject', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/2020-11-20/projects/{projectName}', ], 'input' => [ 'shape' => 'DeleteProjectRequest', ], 'output' => [ 'shape' => 'DeleteProjectResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'DescribeDataset' => [ 'name' => 'DescribeDataset', 'http' => [ 'method' => 'GET', 'requestUri' => '/2020-11-20/projects/{projectName}/datasets/{datasetType}', ], 'input' => [ 'shape' => 'DescribeDatasetRequest', ], 'output' => [ 'shape' => 'DescribeDatasetResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'DescribeModel' => [ 'name' => 'DescribeModel', 'http' => [ 'method' => 'GET', 'requestUri' => '/2020-11-20/projects/{projectName}/models/{modelVersion}', ], 'input' => [ 'shape' => 'DescribeModelRequest', ], 'output' => [ 'shape' => 'DescribeModelResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'DescribeModelPackagingJob' => [ 'name' => 'DescribeModelPackagingJob', 'http' => [ 'method' => 'GET', 'requestUri' => '/2020-11-20/projects/{projectName}/modelpackagingjobs/{jobName}', ], 'input' => [ 'shape' => 'DescribeModelPackagingJobRequest', ], 'output' => [ 'shape' => 'DescribeModelPackagingJobResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'DescribeProject' => [ 'name' => 'DescribeProject', 'http' => [ 'method' => 'GET', 'requestUri' => '/2020-11-20/projects/{projectName}', ], 'input' => [ 'shape' => 'DescribeProjectRequest', ], 'output' => [ 'shape' => 'DescribeProjectResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'DetectAnomalies' => [ 'name' => 'DetectAnomalies', 'http' => [ 'method' => 'POST', 'requestUri' => '/2020-11-20/projects/{projectName}/models/{modelVersion}/detect', ], 'input' => [ 'shape' => 'DetectAnomaliesRequest', ], 'output' => [ 'shape' => 'DetectAnomaliesResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListDatasetEntries' => [ 'name' => 'ListDatasetEntries', 'http' => [ 'method' => 'GET', 'requestUri' => '/2020-11-20/projects/{projectName}/datasets/{datasetType}/entries', ], 'input' => [ 'shape' => 'ListDatasetEntriesRequest', ], 'output' => [ 'shape' => 'ListDatasetEntriesResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListModelPackagingJobs' => [ 'name' => 'ListModelPackagingJobs', 'http' => [ 'method' => 'GET', 'requestUri' => '/2020-11-20/projects/{projectName}/modelpackagingjobs', ], 'input' => [ 'shape' => 'ListModelPackagingJobsRequest', ], 'output' => [ 'shape' => 'ListModelPackagingJobsResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListModels' => [ 'name' => 'ListModels', 'http' => [ 'method' => 'GET', 'requestUri' => '/2020-11-20/projects/{projectName}/models', ], 'input' => [ 'shape' => 'ListModelsRequest', ], 'output' => [ 'shape' => 'ListModelsResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListProjects' => [ 'name' => 'ListProjects', 'http' => [ 'method' => 'GET', 'requestUri' => '/2020-11-20/projects', ], 'input' => [ 'shape' => 'ListProjectsRequest', ], 'output' => [ 'shape' => 'ListProjectsResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/2020-11-20/tags/{resourceArn}', ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'StartModel' => [ 'name' => 'StartModel', 'http' => [ 'method' => 'POST', 'requestUri' => '/2020-11-20/projects/{projectName}/models/{modelVersion}/start', 'responseCode' => 202, ], 'input' => [ 'shape' => 'StartModelRequest', ], 'output' => [ 'shape' => 'StartModelResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'StartModelPackagingJob' => [ 'name' => 'StartModelPackagingJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/2020-11-20/projects/{projectName}/modelpackagingjobs', ], 'input' => [ 'shape' => 'StartModelPackagingJobRequest', ], 'output' => [ 'shape' => 'StartModelPackagingJobResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'StopModel' => [ 'name' => 'StopModel', 'http' => [ 'method' => 'POST', 'requestUri' => '/2020-11-20/projects/{projectName}/models/{modelVersion}/stop', 'responseCode' => 202, ], 'input' => [ 'shape' => 'StopModelRequest', ], 'output' => [ 'shape' => 'StopModelResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/2020-11-20/tags/{resourceArn}', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ServiceQuotaExceededException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/2020-11-20/tags/{resourceArn}', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'UpdateDatasetEntries' => [ 'name' => 'UpdateDatasetEntries', 'http' => [ 'method' => 'PATCH', 'requestUri' => '/2020-11-20/projects/{projectName}/datasets/{datasetType}/entries', 'responseCode' => 202, ], 'input' => [ 'shape' => 'UpdateDatasetEntriesRequest', ], 'output' => [ 'shape' => 'UpdateDatasetEntriesResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'ExceptionString', ], ], 'error' => [ 'httpStatusCode' => 403, ], 'exception' => true, ], 'AnomalyClassFilter' => [ 'type' => 'string', 'max' => 10, 'min' => 1, 'pattern' => '(normal|anomaly)', ], 'Boolean' => [ 'type' => 'boolean', ], 'ClientToken' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[a-zA-Z0-9-]+$', ], 'CompilerOptions' => [ 'type' => 'string', 'max' => 1024, 'min' => 3, 'pattern' => '.*', ], 'ComponentDescription' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '[a-zA-Z0-9-_. ()\':,;?]+', ], 'ComponentName' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '[a-zA-Z0-9-_.]+', ], 'ComponentVersion' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^([0-9]{1,6})\\.([0-9]{1,6})\\.([0-9]{1,6})$', ], 'ComponentVersionArn' => [ 'type' => 'string', 'pattern' => 'arn:[^:]*:greengrass:[^:]*:aws:components:[^:]+', ], 'ConflictException' => [ 'type' => 'structure', 'required' => [ 'Message', 'ResourceId', 'ResourceType', ], 'members' => [ 'Message' => [ 'shape' => 'ExceptionString', ], 'ResourceId' => [ 'shape' => 'ExceptionString', ], 'ResourceType' => [ 'shape' => 'ResourceType', ], ], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'ContentType' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '.*', ], 'CreateDatasetRequest' => [ 'type' => 'structure', 'required' => [ 'ProjectName', 'DatasetType', ], 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', 'location' => 'uri', 'locationName' => 'projectName', ], 'DatasetType' => [ 'shape' => 'DatasetType', ], 'DatasetSource' => [ 'shape' => 'DatasetSource', ], 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, 'location' => 'header', 'locationName' => 'X-Amzn-Client-Token', ], ], ], 'CreateDatasetResponse' => [ 'type' => 'structure', 'members' => [ 'DatasetMetadata' => [ 'shape' => 'DatasetMetadata', ], ], ], 'CreateModelRequest' => [ 'type' => 'structure', 'required' => [ 'ProjectName', 'OutputConfig', ], 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', 'location' => 'uri', 'locationName' => 'projectName', ], 'Description' => [ 'shape' => 'ModelDescriptionMessage', ], 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, 'location' => 'header', 'locationName' => 'X-Amzn-Client-Token', ], 'OutputConfig' => [ 'shape' => 'OutputConfig', ], 'KmsKeyId' => [ 'shape' => 'KmsKeyId', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'CreateModelResponse' => [ 'type' => 'structure', 'members' => [ 'ModelMetadata' => [ 'shape' => 'ModelMetadata', ], ], ], 'CreateProjectRequest' => [ 'type' => 'structure', 'required' => [ 'ProjectName', ], 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', ], 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, 'location' => 'header', 'locationName' => 'X-Amzn-Client-Token', ], ], ], 'CreateProjectResponse' => [ 'type' => 'structure', 'members' => [ 'ProjectMetadata' => [ 'shape' => 'ProjectMetadata', ], ], ], 'DatasetChanges' => [ 'type' => 'blob', 'max' => 10485760, 'min' => 1, ], 'DatasetDescription' => [ 'type' => 'structure', 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', ], 'DatasetType' => [ 'shape' => 'DatasetType', ], 'CreationTimestamp' => [ 'shape' => 'DateTime', ], 'LastUpdatedTimestamp' => [ 'shape' => 'DateTime', ], 'Status' => [ 'shape' => 'DatasetStatus', ], 'StatusMessage' => [ 'shape' => 'DatasetStatusMessage', ], 'ImageStats' => [ 'shape' => 'DatasetImageStats', ], ], ], 'DatasetEntry' => [ 'type' => 'string', 'max' => 8192, 'min' => 2, 'pattern' => '^\\{.*\\}$', ], 'DatasetEntryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetEntry', ], ], 'DatasetGroundTruthManifest' => [ 'type' => 'structure', 'members' => [ 'S3Object' => [ 'shape' => 'InputS3Object', ], ], ], 'DatasetImageStats' => [ 'type' => 'structure', 'members' => [ 'Total' => [ 'shape' => 'Integer', ], 'Labeled' => [ 'shape' => 'Integer', ], 'Normal' => [ 'shape' => 'Integer', ], 'Anomaly' => [ 'shape' => 'Integer', ], ], ], 'DatasetMetadata' => [ 'type' => 'structure', 'members' => [ 'DatasetType' => [ 'shape' => 'DatasetType', ], 'CreationTimestamp' => [ 'shape' => 'DateTime', ], 'Status' => [ 'shape' => 'DatasetStatus', ], 'StatusMessage' => [ 'shape' => 'DatasetStatusMessage', ], ], ], 'DatasetMetadataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DatasetMetadata', ], ], 'DatasetSource' => [ 'type' => 'structure', 'members' => [ 'GroundTruthManifest' => [ 'shape' => 'DatasetGroundTruthManifest', ], ], ], 'DatasetStatus' => [ 'type' => 'string', 'enum' => [ 'CREATE_IN_PROGRESS', 'CREATE_COMPLETE', 'CREATE_FAILED', 'UPDATE_IN_PROGRESS', 'UPDATE_COMPLETE', 'UPDATE_FAILED_ROLLBACK_IN_PROGRESS', 'UPDATE_FAILED_ROLLBACK_COMPLETE', 'DELETE_IN_PROGRESS', 'DELETE_COMPLETE', 'DELETE_FAILED', ], ], 'DatasetStatusMessage' => [ 'type' => 'string', ], 'DatasetType' => [ 'type' => 'string', 'max' => 10, 'min' => 1, 'pattern' => 'train|test', ], 'DateTime' => [ 'type' => 'timestamp', ], 'DeleteDatasetRequest' => [ 'type' => 'structure', 'required' => [ 'ProjectName', 'DatasetType', ], 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', 'location' => 'uri', 'locationName' => 'projectName', ], 'DatasetType' => [ 'shape' => 'DatasetType', 'location' => 'uri', 'locationName' => 'datasetType', ], 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, 'location' => 'header', 'locationName' => 'X-Amzn-Client-Token', ], ], ], 'DeleteDatasetResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteModelRequest' => [ 'type' => 'structure', 'required' => [ 'ProjectName', 'ModelVersion', ], 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', 'location' => 'uri', 'locationName' => 'projectName', ], 'ModelVersion' => [ 'shape' => 'ModelVersionNoLatest', 'location' => 'uri', 'locationName' => 'modelVersion', ], 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, 'location' => 'header', 'locationName' => 'X-Amzn-Client-Token', ], ], ], 'DeleteModelResponse' => [ 'type' => 'structure', 'members' => [ 'ModelArn' => [ 'shape' => 'ModelArn', ], ], ], 'DeleteProjectRequest' => [ 'type' => 'structure', 'required' => [ 'ProjectName', ], 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', 'location' => 'uri', 'locationName' => 'projectName', ], 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, 'location' => 'header', 'locationName' => 'X-Amzn-Client-Token', ], ], ], 'DeleteProjectResponse' => [ 'type' => 'structure', 'members' => [ 'ProjectArn' => [ 'shape' => 'ProjectArn', ], ], ], 'DescribeDatasetRequest' => [ 'type' => 'structure', 'required' => [ 'ProjectName', 'DatasetType', ], 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', 'location' => 'uri', 'locationName' => 'projectName', ], 'DatasetType' => [ 'shape' => 'DatasetType', 'location' => 'uri', 'locationName' => 'datasetType', ], ], ], 'DescribeDatasetResponse' => [ 'type' => 'structure', 'members' => [ 'DatasetDescription' => [ 'shape' => 'DatasetDescription', ], ], ], 'DescribeModelPackagingJobRequest' => [ 'type' => 'structure', 'required' => [ 'ProjectName', 'JobName', ], 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', 'location' => 'uri', 'locationName' => 'projectName', ], 'JobName' => [ 'shape' => 'ModelPackagingJobName', 'location' => 'uri', 'locationName' => 'jobName', ], ], ], 'DescribeModelPackagingJobResponse' => [ 'type' => 'structure', 'members' => [ 'ModelPackagingDescription' => [ 'shape' => 'ModelPackagingDescription', ], ], ], 'DescribeModelRequest' => [ 'type' => 'structure', 'required' => [ 'ProjectName', 'ModelVersion', ], 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', 'location' => 'uri', 'locationName' => 'projectName', ], 'ModelVersion' => [ 'shape' => 'ModelVersion', 'location' => 'uri', 'locationName' => 'modelVersion', ], ], ], 'DescribeModelResponse' => [ 'type' => 'structure', 'members' => [ 'ModelDescription' => [ 'shape' => 'ModelDescription', ], ], ], 'DescribeProjectRequest' => [ 'type' => 'structure', 'required' => [ 'ProjectName', ], 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', 'location' => 'uri', 'locationName' => 'projectName', ], ], ], 'DescribeProjectResponse' => [ 'type' => 'structure', 'members' => [ 'ProjectDescription' => [ 'shape' => 'ProjectDescription', ], ], ], 'DetectAnomaliesRequest' => [ 'type' => 'structure', 'required' => [ 'ProjectName', 'ModelVersion', 'Body', 'ContentType', ], 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', 'location' => 'uri', 'locationName' => 'projectName', ], 'ModelVersion' => [ 'shape' => 'ModelVersion', 'location' => 'uri', 'locationName' => 'modelVersion', ], 'Body' => [ 'shape' => 'Stream', ], 'ContentType' => [ 'shape' => 'ContentType', 'location' => 'header', 'locationName' => 'Content-Type', ], ], 'payload' => 'Body', ], 'DetectAnomaliesResponse' => [ 'type' => 'structure', 'members' => [ 'DetectAnomalyResult' => [ 'shape' => 'DetectAnomalyResult', ], ], ], 'DetectAnomalyResult' => [ 'type' => 'structure', 'members' => [ 'Source' => [ 'shape' => 'ImageSource', ], 'IsAnomalous' => [ 'shape' => 'Boolean', ], 'Confidence' => [ 'shape' => 'Float', ], ], ], 'ExceptionString' => [ 'type' => 'string', ], 'Float' => [ 'type' => 'float', ], 'GreengrassConfiguration' => [ 'type' => 'structure', 'required' => [ 'CompilerOptions', 'S3OutputLocation', 'ComponentName', ], 'members' => [ 'CompilerOptions' => [ 'shape' => 'CompilerOptions', ], 'TargetDevice' => [ 'shape' => 'TargetDevice', ], 'TargetPlatform' => [ 'shape' => 'TargetPlatform', ], 'S3OutputLocation' => [ 'shape' => 'S3Location', ], 'ComponentName' => [ 'shape' => 'ComponentName', ], 'ComponentVersion' => [ 'shape' => 'ComponentVersion', ], 'ComponentDescription' => [ 'shape' => 'ComponentDescription', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'GreengrassOutputDetails' => [ 'type' => 'structure', 'members' => [ 'ComponentVersionArn' => [ 'shape' => 'ComponentVersionArn', ], 'ComponentName' => [ 'shape' => 'ComponentName', ], 'ComponentVersion' => [ 'shape' => 'ComponentVersion', ], ], ], 'ImageSource' => [ 'type' => 'structure', 'members' => [ 'Type' => [ 'shape' => 'ImageSourceType', ], ], ], 'ImageSourceType' => [ 'type' => 'string', 'pattern' => 'direct', ], 'InferenceUnits' => [ 'type' => 'integer', 'min' => 1, ], 'InputS3Object' => [ 'type' => 'structure', 'required' => [ 'Bucket', 'Key', ], 'members' => [ 'Bucket' => [ 'shape' => 'S3BucketName', ], 'Key' => [ 'shape' => 'S3ObjectKey', ], 'VersionId' => [ 'shape' => 'S3ObjectVersion', ], ], ], 'Integer' => [ 'type' => 'integer', ], 'InternalServerException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'ExceptionString', ], 'RetryAfterSeconds' => [ 'shape' => 'RetryAfterSeconds', 'location' => 'header', 'locationName' => 'Retry-After', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'IsLabeled' => [ 'type' => 'boolean', ], 'KmsKeyId' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '^[A-Za-z0-9][A-Za-z0-9:_/+=,@.-]{0,2048}$', ], 'ListDatasetEntriesRequest' => [ 'type' => 'structure', 'required' => [ 'ProjectName', 'DatasetType', ], 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', 'location' => 'uri', 'locationName' => 'projectName', ], 'DatasetType' => [ 'shape' => 'DatasetType', 'location' => 'uri', 'locationName' => 'datasetType', ], 'Labeled' => [ 'shape' => 'IsLabeled', 'location' => 'querystring', 'locationName' => 'labeled', ], 'AnomalyClass' => [ 'shape' => 'AnomalyClassFilter', 'location' => 'querystring', 'locationName' => 'anomalyClass', ], 'BeforeCreationDate' => [ 'shape' => 'DateTime', 'location' => 'querystring', 'locationName' => 'createdBefore', ], 'AfterCreationDate' => [ 'shape' => 'DateTime', 'location' => 'querystring', 'locationName' => 'createdAfter', ], 'NextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'MaxResults' => [ 'shape' => 'PageSize', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'SourceRefContains' => [ 'shape' => 'QueryString', 'location' => 'querystring', 'locationName' => 'sourceRefContains', ], ], ], 'ListDatasetEntriesResponse' => [ 'type' => 'structure', 'members' => [ 'DatasetEntries' => [ 'shape' => 'DatasetEntryList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListModelPackagingJobsRequest' => [ 'type' => 'structure', 'required' => [ 'ProjectName', ], 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', 'location' => 'uri', 'locationName' => 'projectName', ], 'NextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'MaxResults' => [ 'shape' => 'PageSize', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListModelPackagingJobsResponse' => [ 'type' => 'structure', 'members' => [ 'ModelPackagingJobs' => [ 'shape' => 'ModelPackagingJobsList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListModelsRequest' => [ 'type' => 'structure', 'required' => [ 'ProjectName', ], 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', 'location' => 'uri', 'locationName' => 'projectName', ], 'NextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'MaxResults' => [ 'shape' => 'PageSize', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListModelsResponse' => [ 'type' => 'structure', 'members' => [ 'Models' => [ 'shape' => 'ModelMetadataList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListProjectsRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'MaxResults' => [ 'shape' => 'PageSize', 'location' => 'querystring', 'locationName' => 'maxResults', ], ], ], 'ListProjectsResponse' => [ 'type' => 'structure', 'members' => [ 'Projects' => [ 'shape' => 'ProjectMetadataList', ], 'NextToken' => [ 'shape' => 'PaginationToken', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'TagArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'TagList', ], ], ], 'ModelArn' => [ 'type' => 'string', ], 'ModelDescription' => [ 'type' => 'structure', 'members' => [ 'ModelVersion' => [ 'shape' => 'ModelVersion', ], 'ModelArn' => [ 'shape' => 'ModelArn', ], 'CreationTimestamp' => [ 'shape' => 'DateTime', ], 'Description' => [ 'shape' => 'ModelDescriptionMessage', ], 'Status' => [ 'shape' => 'ModelStatus', ], 'StatusMessage' => [ 'shape' => 'ModelStatusMessage', ], 'Performance' => [ 'shape' => 'ModelPerformance', ], 'OutputConfig' => [ 'shape' => 'OutputConfig', ], 'EvaluationManifest' => [ 'shape' => 'OutputS3Object', ], 'EvaluationResult' => [ 'shape' => 'OutputS3Object', ], 'EvaluationEndTimestamp' => [ 'shape' => 'DateTime', ], 'KmsKeyId' => [ 'shape' => 'KmsKeyId', ], ], ], 'ModelDescriptionMessage' => [ 'type' => 'string', 'max' => 500, 'min' => 1, 'pattern' => '[0-9A-Za-z\\.\\-_]*', ], 'ModelHostingStatus' => [ 'type' => 'string', 'enum' => [ 'STARTING_HOSTING', 'HOSTED', 'HOSTING_FAILED', 'STOPPING_HOSTING', 'SYSTEM_UPDATING', ], ], 'ModelMetadata' => [ 'type' => 'structure', 'members' => [ 'CreationTimestamp' => [ 'shape' => 'DateTime', ], 'ModelVersion' => [ 'shape' => 'ModelVersion', ], 'ModelArn' => [ 'shape' => 'ModelArn', ], 'Description' => [ 'shape' => 'ModelDescriptionMessage', ], 'Status' => [ 'shape' => 'ModelStatus', ], 'StatusMessage' => [ 'shape' => 'ModelStatusMessage', ], 'Performance' => [ 'shape' => 'ModelPerformance', ], ], ], 'ModelMetadataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelMetadata', ], ], 'ModelPackagingConfiguration' => [ 'type' => 'structure', 'required' => [ 'Greengrass', ], 'members' => [ 'Greengrass' => [ 'shape' => 'GreengrassConfiguration', ], ], ], 'ModelPackagingDescription' => [ 'type' => 'structure', 'members' => [ 'JobName' => [ 'shape' => 'ModelPackagingJobName', ], 'ProjectName' => [ 'shape' => 'ProjectName', ], 'ModelVersion' => [ 'shape' => 'ModelVersion', ], 'ModelPackagingConfiguration' => [ 'shape' => 'ModelPackagingConfiguration', ], 'ModelPackagingJobDescription' => [ 'shape' => 'ModelPackagingJobDescription', ], 'ModelPackagingMethod' => [ 'shape' => 'ModelPackagingMethod', ], 'ModelPackagingOutputDetails' => [ 'shape' => 'ModelPackagingOutputDetails', ], 'Status' => [ 'shape' => 'ModelPackagingJobStatus', ], 'StatusMessage' => [ 'shape' => 'ModelPackagingStatusMessage', ], 'CreationTimestamp' => [ 'shape' => 'DateTime', ], 'LastUpdatedTimestamp' => [ 'shape' => 'DateTime', ], ], ], 'ModelPackagingJobDescription' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '[a-zA-Z0-9-_. ()\':,;?]+', ], 'ModelPackagingJobMetadata' => [ 'type' => 'structure', 'members' => [ 'JobName' => [ 'shape' => 'ModelPackagingJobName', ], 'ProjectName' => [ 'shape' => 'ProjectName', ], 'ModelVersion' => [ 'shape' => 'ModelVersion', ], 'ModelPackagingJobDescription' => [ 'shape' => 'ModelPackagingJobDescription', ], 'ModelPackagingMethod' => [ 'shape' => 'ModelPackagingMethod', ], 'Status' => [ 'shape' => 'ModelPackagingJobStatus', ], 'StatusMessage' => [ 'shape' => 'ModelPackagingStatusMessage', ], 'CreationTimestamp' => [ 'shape' => 'DateTime', ], 'LastUpdatedTimestamp' => [ 'shape' => 'DateTime', ], ], ], 'ModelPackagingJobName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '[a-zA-Z0-9-]+', ], 'ModelPackagingJobStatus' => [ 'type' => 'string', 'enum' => [ 'CREATED', 'RUNNING', 'SUCCEEDED', 'FAILED', ], ], 'ModelPackagingJobsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ModelPackagingJobMetadata', ], ], 'ModelPackagingMethod' => [ 'type' => 'string', 'max' => 32, 'min' => 1, 'pattern' => '^[a-zA-Z0-9]+', ], 'ModelPackagingOutputDetails' => [ 'type' => 'structure', 'members' => [ 'Greengrass' => [ 'shape' => 'GreengrassOutputDetails', ], ], ], 'ModelPackagingStatusMessage' => [ 'type' => 'string', ], 'ModelPerformance' => [ 'type' => 'structure', 'members' => [ 'F1Score' => [ 'shape' => 'Float', ], 'Recall' => [ 'shape' => 'Float', ], 'Precision' => [ 'shape' => 'Float', ], ], ], 'ModelStatus' => [ 'type' => 'string', 'enum' => [ 'TRAINING', 'TRAINED', 'TRAINING_FAILED', 'STARTING_HOSTING', 'HOSTED', 'HOSTING_FAILED', 'STOPPING_HOSTING', 'SYSTEM_UPDATING', 'DELETING', ], ], 'ModelStatusMessage' => [ 'type' => 'string', ], 'ModelVersion' => [ 'type' => 'string', 'max' => 10, 'min' => 1, 'pattern' => '([1-9][0-9]*|latest)', ], 'ModelVersionNoLatest' => [ 'type' => 'string', 'max' => 10, 'min' => 1, 'pattern' => '([1-9][0-9]*)', ], 'OutputConfig' => [ 'type' => 'structure', 'required' => [ 'S3Location', ], 'members' => [ 'S3Location' => [ 'shape' => 'S3Location', ], ], ], 'OutputS3Object' => [ 'type' => 'structure', 'required' => [ 'Bucket', 'Key', ], 'members' => [ 'Bucket' => [ 'shape' => 'S3BucketName', ], 'Key' => [ 'shape' => 'S3ObjectKey', ], ], ], 'PageSize' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'PaginationToken' => [ 'type' => 'string', 'max' => 2048, 'pattern' => '^[a-zA-Z0-9\\/\\+\\=]{0,2048}$', ], 'ProjectArn' => [ 'type' => 'string', ], 'ProjectDescription' => [ 'type' => 'structure', 'members' => [ 'ProjectArn' => [ 'shape' => 'ProjectArn', ], 'ProjectName' => [ 'shape' => 'ProjectName', ], 'CreationTimestamp' => [ 'shape' => 'DateTime', ], 'Datasets' => [ 'shape' => 'DatasetMetadataList', ], ], ], 'ProjectMetadata' => [ 'type' => 'structure', 'members' => [ 'ProjectArn' => [ 'shape' => 'ProjectArn', ], 'ProjectName' => [ 'shape' => 'ProjectName', ], 'CreationTimestamp' => [ 'shape' => 'DateTime', ], ], ], 'ProjectMetadataList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProjectMetadata', ], ], 'ProjectName' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '[a-zA-Z0-9][a-zA-Z0-9_\\-]*', ], 'QueryString' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '.*\\S.*', ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'required' => [ 'Message', 'ResourceId', 'ResourceType', ], 'members' => [ 'Message' => [ 'shape' => 'ExceptionString', ], 'ResourceId' => [ 'shape' => 'ExceptionString', ], 'ResourceType' => [ 'shape' => 'ResourceType', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'ResourceType' => [ 'type' => 'string', 'enum' => [ 'PROJECT', 'DATASET', 'MODEL', 'TRIAL', 'MODEL_PACKAGE_JOB', ], ], 'RetryAfterSeconds' => [ 'type' => 'integer', ], 'S3BucketName' => [ 'type' => 'string', 'max' => 63, 'min' => 3, 'pattern' => '[0-9A-Za-z\\.\\-_]*', ], 'S3KeyPrefix' => [ 'type' => 'string', 'max' => 1024, 'pattern' => '^([a-zA-Z0-9!_.*\'()-][/a-zA-Z0-9!_.*\'()-]*)?$', ], 'S3Location' => [ 'type' => 'structure', 'required' => [ 'Bucket', ], 'members' => [ 'Bucket' => [ 'shape' => 'S3BucketName', ], 'Prefix' => [ 'shape' => 'S3KeyPrefix', ], ], ], 'S3ObjectKey' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '^([a-zA-Z0-9!_.*\'()-][/a-zA-Z0-9!_.*\'()-]*)?$', ], 'S3ObjectVersion' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '.*', ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'required' => [ 'Message', 'QuotaCode', 'ServiceCode', ], 'members' => [ 'Message' => [ 'shape' => 'ExceptionString', ], 'ResourceId' => [ 'shape' => 'ExceptionString', ], 'ResourceType' => [ 'shape' => 'ResourceType', ], 'QuotaCode' => [ 'shape' => 'ExceptionString', ], 'ServiceCode' => [ 'shape' => 'ExceptionString', ], ], 'error' => [ 'httpStatusCode' => 402, ], 'exception' => true, ], 'StartModelPackagingJobRequest' => [ 'type' => 'structure', 'required' => [ 'ProjectName', 'ModelVersion', 'Configuration', ], 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', 'location' => 'uri', 'locationName' => 'projectName', ], 'ModelVersion' => [ 'shape' => 'ModelVersion', ], 'JobName' => [ 'shape' => 'ModelPackagingJobName', ], 'Configuration' => [ 'shape' => 'ModelPackagingConfiguration', ], 'Description' => [ 'shape' => 'ModelPackagingJobDescription', ], 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, 'location' => 'header', 'locationName' => 'X-Amzn-Client-Token', ], ], ], 'StartModelPackagingJobResponse' => [ 'type' => 'structure', 'members' => [ 'JobName' => [ 'shape' => 'ModelPackagingJobName', ], ], ], 'StartModelRequest' => [ 'type' => 'structure', 'required' => [ 'ProjectName', 'ModelVersion', 'MinInferenceUnits', ], 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', 'location' => 'uri', 'locationName' => 'projectName', ], 'ModelVersion' => [ 'shape' => 'ModelVersion', 'location' => 'uri', 'locationName' => 'modelVersion', ], 'MinInferenceUnits' => [ 'shape' => 'InferenceUnits', ], 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, 'location' => 'header', 'locationName' => 'X-Amzn-Client-Token', ], ], ], 'StartModelResponse' => [ 'type' => 'structure', 'members' => [ 'Status' => [ 'shape' => 'ModelHostingStatus', ], ], ], 'StopModelRequest' => [ 'type' => 'structure', 'required' => [ 'ProjectName', 'ModelVersion', ], 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', 'location' => 'uri', 'locationName' => 'projectName', ], 'ModelVersion' => [ 'shape' => 'ModelVersion', 'location' => 'uri', 'locationName' => 'modelVersion', ], 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, 'location' => 'header', 'locationName' => 'X-Amzn-Client-Token', ], ], ], 'StopModelResponse' => [ 'type' => 'structure', 'members' => [ 'Status' => [ 'shape' => 'ModelHostingStatus', ], ], ], 'Stream' => [ 'type' => 'blob', 'requiresLength' => true, 'streaming' => true, ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', 'Value', ], 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagArn' => [ 'type' => 'string', 'max' => 1011, 'min' => 1, ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$', ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 200, 'min' => 0, ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'max' => 200, 'min' => 0, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'Tags', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'TagArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '^([\\p{L}\\p{Z}\\p{N}_.:/=+\\-@]*)$', ], 'TargetDevice' => [ 'type' => 'string', 'enum' => [ 'jetson_xavier', ], ], 'TargetPlatform' => [ 'type' => 'structure', 'required' => [ 'Os', 'Arch', 'Accelerator', ], 'members' => [ 'Os' => [ 'shape' => 'TargetPlatformOs', ], 'Arch' => [ 'shape' => 'TargetPlatformArch', ], 'Accelerator' => [ 'shape' => 'TargetPlatformAccelerator', ], ], ], 'TargetPlatformAccelerator' => [ 'type' => 'string', 'enum' => [ 'NVIDIA', ], ], 'TargetPlatformArch' => [ 'type' => 'string', 'enum' => [ 'ARM64', 'X86_64', ], ], 'TargetPlatformOs' => [ 'type' => 'string', 'enum' => [ 'LINUX', ], ], 'ThrottlingException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'ExceptionString', ], 'QuotaCode' => [ 'shape' => 'ExceptionString', ], 'ServiceCode' => [ 'shape' => 'ExceptionString', ], 'RetryAfterSeconds' => [ 'shape' => 'RetryAfterSeconds', 'location' => 'header', 'locationName' => 'Retry-After', ], ], 'error' => [ 'httpStatusCode' => 429, ], 'exception' => true, ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceArn', 'TagKeys', ], 'members' => [ 'ResourceArn' => [ 'shape' => 'TagArn', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'TagKeys' => [ 'shape' => 'TagKeyList', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateDatasetEntriesRequest' => [ 'type' => 'structure', 'required' => [ 'ProjectName', 'DatasetType', 'Changes', ], 'members' => [ 'ProjectName' => [ 'shape' => 'ProjectName', 'location' => 'uri', 'locationName' => 'projectName', ], 'DatasetType' => [ 'shape' => 'DatasetType', 'location' => 'uri', 'locationName' => 'datasetType', ], 'Changes' => [ 'shape' => 'DatasetChanges', ], 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, 'location' => 'header', 'locationName' => 'X-Amzn-Client-Token', ], ], ], 'UpdateDatasetEntriesResponse' => [ 'type' => 'structure', 'members' => [ 'Status' => [ 'shape' => 'DatasetStatus', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'ExceptionString', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], ],];

<?php

namespace AlNutile\DocusignDriver;

use AlNutile\DocusignDriver\Response\Submitter;
use AlNutile\DocusignDriver\Response\GetSubmissionResponse;
use AlNutile\DocusignDriver\Response\ListAllTemplatesResponse;
use AlNutile\ElectronicSignatures\Response\SubmissionResponse;

abstract class ClientContract
{
    protected string $baseUrl = 'https://api.docuseal.co/';

    abstract public function getUrlForSubmission(SubmissionResponse $submissionResponse): string;

    abstract public function listTemplates(): ListAllTemplatesResponse;

    abstract public function downloadDocument(string $submitterId): string|bool;

    abstract public function getSubmitter(mixed $submitterId): Submitter;

    abstract public function getSubmission(mixed $submissionId): GetSubmissionResponse;

    abstract public function submit(array $submittersDto, mixed $templateId): SubmissionResponse;

    abstract public function uploadTemplate(string $template = 'LandAccessAgreementTemplate.pdf');

    abstract public function getClient();
}

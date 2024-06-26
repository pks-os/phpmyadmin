<?php

declare(strict_types=1);

namespace PhpMyAdmin\Controllers\Navigation;

use PhpMyAdmin\Config;
use PhpMyAdmin\Controllers\InvocableController;
use PhpMyAdmin\Http\Response;
use PhpMyAdmin\Http\ServerRequest;
use PhpMyAdmin\Message;
use PhpMyAdmin\ResponseRenderer;

use function __;
use function is_numeric;

final class UpdateNavWidthConfigController implements InvocableController
{
    public function __construct(private readonly ResponseRenderer $response, private readonly Config $config)
    {
    }

    public function __invoke(ServerRequest $request): Response|null
    {
        $value = $request->getParsedBodyParam('value');
        if (! is_numeric($value) || $value < 0) {
            $this->response->setRequestStatus(false);
            $this->response->addJSON(['message' => Message::error(__('Unexpected parameter value.'))]);

            return null;
        }

        $result = $this->config->setUserValue(null, 'NavigationWidth', (int) $value);
        if ($result === true) {
            return null;
        }

        $this->response->setRequestStatus(false);
        $this->response->addJSON(['message' => $result]);

        return null;
    }
}

<?php


namespace Spryker\Client\Permission\Plugin;


interface ExecutablePermissionPluginInterface extends PermissionPluginInterface
{
    /**
     * Specification:
     * - Implements a business login against the configuration and the passed context
     *
     * @api
     *
     * @param array $configuration
     * @param int|string|array|null $context
     *
     * @return bool
     */
    public function can(array $configuration, $context = null);

    /**
     * The signature is used to draw a form for filling on assigning a permission to a role.
     * Used a configuration array generation as well.
     *
     * Specification:
     * - Provides a signature for collection the plugin configuration
     *
     * @api
     *
     * @example
     * [
     *      'amount' => ExecutablePermissionPluginInterface::CONFIG_FIELD_TYPE_INT,
     *      'item_count' => ExecutablePermissionPluginInterface::CONFIG_FIELD_TYPE_INT,
     * ]
     *
     * @return array
     */
    public function getConfigurationSignature();
}
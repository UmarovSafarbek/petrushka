<?php

namespace Ensi\AdminAuthClient;

class AdminAuthClientProvider
{
    /** @var string[] */
    public static $apis = ['\Ensi\AdminAuthClient\Api\OauthApi', '\Ensi\AdminAuthClient\Api\UsersApi'];

    /** @var string[] */
    public static $dtos = [
        '\Ensi\AdminAuthClient\Dto\RequestBodyPagination',
        '\Ensi\AdminAuthClient\Dto\SearchUsersResponseMeta',
        '\Ensi\AdminAuthClient\Dto\PatchUserRequest',
        '\Ensi\AdminAuthClient\Dto\Error',
        '\Ensi\AdminAuthClient\Dto\RequestBodyOffsetPagination',
        '\Ensi\AdminAuthClient\Dto\PaginationTypeEnum',
        '\Ensi\AdminAuthClient\Dto\SearchRolesResponse',
        '\Ensi\AdminAuthClient\Dto\MassChangeActive',
        '\Ensi\AdminAuthClient\Dto\EmptyDataResponse',
        '\Ensi\AdminAuthClient\Dto\UserResponse',
        '\Ensi\AdminAuthClient\Dto\User',
        '\Ensi\AdminAuthClient\Dto\SearchUsersRequest',
        '\Ensi\AdminAuthClient\Dto\UserIncludes',
        '\Ensi\AdminAuthClient\Dto\ResponseBodyPagination',
        '\Ensi\AdminAuthClient\Dto\PaginationTypeCursorEnum',
        '\Ensi\AdminAuthClient\Dto\DeleteRoleFromUserRequest',
        '\Ensi\AdminAuthClient\Dto\MessageAboutUpdationUser',
        '\Ensi\AdminAuthClient\Dto\ResponseBodyCursorPagination',
        '\Ensi\AdminAuthClient\Dto\PaginationTypeOffsetEnum',
        '\Ensi\AdminAuthClient\Dto\ErrorResponse',
        '\Ensi\AdminAuthClient\Dto\CreateUserRequest',
        '\Ensi\AdminAuthClient\Dto\MessageAboutDeactivationUser',
        '\Ensi\AdminAuthClient\Dto\SearchRolesRequest',
        '\Ensi\AdminAuthClient\Dto\UserFillableProperties',
        '\Ensi\AdminAuthClient\Dto\ResponseBodyOffsetPagination',
        '\Ensi\AdminAuthClient\Dto\UserRoleAllOf',
        '\Ensi\AdminAuthClient\Dto\MessageForSetPassword',
        '\Ensi\AdminAuthClient\Dto\RequestBodyCursorPagination',
        '\Ensi\AdminAuthClient\Dto\UserReadonlyProperties',
        '\Ensi\AdminAuthClient\Dto\UserRole',
        '\Ensi\AdminAuthClient\Dto\ModelInterface',
        '\Ensi\AdminAuthClient\Dto\CreateTokenResponse',
        '\Ensi\AdminAuthClient\Dto\GrantTypeEnum',
        '\Ensi\AdminAuthClient\Dto\PatchUserRequestAllOf',
        '\Ensi\AdminAuthClient\Dto\Role',
        '\Ensi\AdminAuthClient\Dto\UserWriteOnlyProperties',
        '\Ensi\AdminAuthClient\Dto\CreateTokenRequest',
        '\Ensi\AdminAuthClient\Dto\RoleResponse',
        '\Ensi\AdminAuthClient\Dto\SearchUsersResponse',
        '\Ensi\AdminAuthClient\Dto\RoleEnum',
        '\Ensi\AdminAuthClient\Dto\AddRolesToUserRequest',
    ];

    /** @var string */
    public static $configuration = '\Ensi\AdminAuthClient\Configuration';
}

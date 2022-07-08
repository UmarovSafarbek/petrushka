# # User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор пользователя | [optional] 
**full_name** | **string** | Полное ФИО | [optional] 
**short_name** | **string** | Сокращенное ФИО | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Дата регистрации | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Дата обновления | [optional] 
**active** | **bool** | Активен | [optional] 
**login** | **string** | Логин | [optional] 
**last_name** | **string** | Фамилия | [optional] 
**first_name** | **string** | Имя | [optional] 
**middle_name** | **string** | Отчество | [optional] 
**email** | **string** | Email | [optional] 
**phone** | **string** | Телефон | [optional] 
**timezone** | **string** | Временная зона | [optional] 
**roles** | [**\Ensi\AdminAuthClient\Dto\UserRole[]**](UserRole.md) | Роли пользователя. Объект, в котором ключ - ID роли | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)



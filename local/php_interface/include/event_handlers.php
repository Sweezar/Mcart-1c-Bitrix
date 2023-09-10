<?php

AddEventHandler("main", "OnAfterUserRegister", Array("RegistrationHandler", "OnAfterUserRegisterHandler"));
class RegistrationHandler
{
  public static function OnAfterUserRegisterHandler(&$arFields)
    {
        // если регистрация успешна то
        if($arFields["USER_ID"]>0)
        {
          $arGroups[] = $arFields["UF_FLAG"];
          CUser::SetUserGroup($arFields["USER_ID"], $arGroups);
          
        }
        
    }
}
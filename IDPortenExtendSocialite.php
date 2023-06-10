<?php

namespace SocialiteProviders\IDPorten;

use SocialiteProviders\Manager\SocialiteWasCalled;

class IDPortenExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('idporten', Provider::class);
    }
}

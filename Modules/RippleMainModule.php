<?php declare(strict_types = 1);

/*  Copyright (c) 2023 Nikita Zhavoronkov, nikzh@nikzh.com
 *  Copyright (c) 2023 3xpl developers, 3@3xpl.com
 *  Distributed under the MIT software license, see the accompanying file LICENSE.md  */

final class RippleMainModule extends RippleLikeMainModule implements Module
{
    function initialize()
    {
        // CoreModule
        $this->blockchain = 'xrp-ledger';
        $this->module = 'xrp-ledger-main';
        $this->is_main = true;
        $this->currency = 'xrp';
        $this->currency_details = ['name' => 'XRP', 'symbol' => 'XRP', 'decimals' => 6, 'description' => null];
        $this->first_block_date = '2013-01-01';
        $this->first_block_id = 32570;
        $this->extra_data_details = RippleSpecialTransactions::to_assoc_array();

        $this->tests = [
            ['block' => 960986,   'result' => 'a:2:{s:6:"events";a:12:{i:0;a:8:{s:11:"transaction";s:64:"3f07e5680e4a1a6eb1ab6ccc2907c8ffadd5a11cb7f0c4e3452b2b8f4ddb759e";s:7:"address";s:34:"rf6nVZPkV85VXq8RtE1esRf3sDMpQ1Dw6U";s:8:"sort_key";i:0;s:6:"effect";s:9:"-16000000";s:6:"failed";s:1:"f";s:5:"extra";s:1:"p";s:5:"block";i:960986;s:4:"time";s:19:"2013-06-07 12:25:50";}i:1;a:8:{s:11:"transaction";s:64:"3f07e5680e4a1a6eb1ab6ccc2907c8ffadd5a11cb7f0c4e3452b2b8f4ddb759e";s:7:"address";s:34:"rpyUV8W6XRvss6SBkAS8PyzGwMsSDxgNXW";s:8:"sort_key";i:1;s:6:"effect";s:8:"16000000";s:6:"failed";s:1:"f";s:5:"extra";s:1:"p";s:5:"block";i:960986;s:4:"time";s:19:"2013-06-07 12:25:50";}i:2;a:8:{s:11:"transaction";s:64:"3f07e5680e4a1a6eb1ab6ccc2907c8ffadd5a11cb7f0c4e3452b2b8f4ddb759e";s:7:"address";s:34:"rf6nVZPkV85VXq8RtE1esRf3sDMpQ1Dw6U";s:8:"sort_key";i:2;s:6:"effect";s:3:"-10";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:960986;s:4:"time";s:19:"2013-06-07 12:25:50";}i:3;a:8:{s:11:"transaction";s:64:"3f07e5680e4a1a6eb1ab6ccc2907c8ffadd5a11cb7f0c4e3452b2b8f4ddb759e";s:7:"address";s:8:"the-void";s:8:"sort_key";i:3;s:6:"effect";s:2:"10";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:960986;s:4:"time";s:19:"2013-06-07 12:25:50";}i:4;a:8:{s:11:"transaction";s:64:"93162ee071a0b54bb0b7122324509a1598369c62c6cf5275d23ea3124b22f458";s:7:"address";s:34:"rw7KGprEtiY2g7RCoYuyD9mF3zDQEWNzqh";s:8:"sort_key";i:4;s:6:"effect";s:8:"-1000000";s:6:"failed";s:1:"f";s:5:"extra";s:1:"p";s:5:"block";i:960986;s:4:"time";s:19:"2013-06-07 12:25:50";}i:5;a:8:{s:11:"transaction";s:64:"93162ee071a0b54bb0b7122324509a1598369c62c6cf5275d23ea3124b22f458";s:7:"address";s:34:"rpyUV8W6XRvss6SBkAS8PyzGwMsSDxgNXW";s:8:"sort_key";i:5;s:6:"effect";s:7:"1000000";s:6:"failed";s:1:"f";s:5:"extra";s:1:"p";s:5:"block";i:960986;s:4:"time";s:19:"2013-06-07 12:25:50";}i:6;a:8:{s:11:"transaction";s:64:"93162ee071a0b54bb0b7122324509a1598369c62c6cf5275d23ea3124b22f458";s:7:"address";s:34:"rw7KGprEtiY2g7RCoYuyD9mF3zDQEWNzqh";s:8:"sort_key";i:6;s:6:"effect";s:3:"-10";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:960986;s:4:"time";s:19:"2013-06-07 12:25:50";}i:7;a:8:{s:11:"transaction";s:64:"93162ee071a0b54bb0b7122324509a1598369c62c6cf5275d23ea3124b22f458";s:7:"address";s:8:"the-void";s:8:"sort_key";i:7;s:6:"effect";s:2:"10";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:960986;s:4:"time";s:19:"2013-06-07 12:25:50";}i:8;a:8:{s:11:"transaction";s:64:"e23ee2c6c5c27ab55c2c0e2419c2b0a82b06d7d3b81760b2861682742d2fe904";s:7:"address";s:34:"rKKgjpgxooi38dveFfZX1wKcP2KmWcmMsz";s:8:"sort_key";i:8;s:6:"effect";s:12:"-14799000000";s:6:"failed";s:1:"f";s:5:"extra";s:1:"p";s:5:"block";i:960986;s:4:"time";s:19:"2013-06-07 12:25:50";}i:9;a:8:{s:11:"transaction";s:64:"e23ee2c6c5c27ab55c2c0e2419c2b0a82b06d7d3b81760b2861682742d2fe904";s:7:"address";s:34:"rLEsXccBGNR3UPuPu2hUXPjziKC3qKSBun";s:8:"sort_key";i:9;s:6:"effect";s:11:"14799000000";s:6:"failed";s:1:"f";s:5:"extra";s:1:"p";s:5:"block";i:960986;s:4:"time";s:19:"2013-06-07 12:25:50";}i:10;a:8:{s:11:"transaction";s:64:"e23ee2c6c5c27ab55c2c0e2419c2b0a82b06d7d3b81760b2861682742d2fe904";s:7:"address";s:34:"rKKgjpgxooi38dveFfZX1wKcP2KmWcmMsz";s:8:"sort_key";i:10;s:6:"effect";s:3:"-10";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:960986;s:4:"time";s:19:"2013-06-07 12:25:50";}i:11;a:8:{s:11:"transaction";s:64:"e23ee2c6c5c27ab55c2c0e2419c2b0a82b06d7d3b81760b2861682742d2fe904";s:7:"address";s:8:"the-void";s:8:"sort_key";i:11;s:6:"effect";s:2:"10";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:960986;s:4:"time";s:19:"2013-06-07 12:25:50";}}s:10:"currencies";N;}'],
            ['block' => 3960046,  'result' => 'a:2:{s:6:"events";a:22:{i:0;a:8:{s:11:"transaction";s:64:"02aafec4e6a282622aaaff23dab79ba4c9def1d1d488bc19ff91923dc96b7f9f";s:7:"address";s:34:"ra7JkEzrgeKHdzKgo4EUUVBnxggY4z37kt";s:8:"sort_key";i:0;s:6:"effect";s:2:"-0";s:6:"failed";s:1:"t";s:5:"extra";s:1:"p";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:1;a:8:{s:11:"transaction";s:64:"02aafec4e6a282622aaaff23dab79ba4c9def1d1d488bc19ff91923dc96b7f9f";s:7:"address";s:34:"rMqdo8H2QeyHHW1dpJh5Ma2GgmvsU2fUHH";s:8:"sort_key";i:1;s:6:"effect";s:1:"0";s:6:"failed";s:1:"t";s:5:"extra";s:1:"p";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:2;a:8:{s:11:"transaction";s:64:"02aafec4e6a282622aaaff23dab79ba4c9def1d1d488bc19ff91923dc96b7f9f";s:7:"address";s:34:"ra7JkEzrgeKHdzKgo4EUUVBnxggY4z37kt";s:8:"sort_key";i:2;s:6:"effect";s:3:"-10";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:3;a:8:{s:11:"transaction";s:64:"02aafec4e6a282622aaaff23dab79ba4c9def1d1d488bc19ff91923dc96b7f9f";s:7:"address";s:8:"the-void";s:8:"sort_key";i:3;s:6:"effect";s:2:"10";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:4;a:8:{s:11:"transaction";s:64:"8252716f6ea0ad8ecc51670984256c812c8e6e7c35e0a3bf4af9581c75360002";s:7:"address";s:34:"rpvRmcPgqvunkXQg5qNCjsoKFwb2uB6PeT";s:8:"sort_key";i:4;s:6:"effect";s:3:"-12";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:5;a:8:{s:11:"transaction";s:64:"8252716f6ea0ad8ecc51670984256c812c8e6e7c35e0a3bf4af9581c75360002";s:7:"address";s:8:"the-void";s:8:"sort_key";i:5;s:6:"effect";s:2:"12";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:6;a:8:{s:11:"transaction";s:64:"91fe86ce880019cff9d00a0cbafee07cd366ec37be9238ce9e7b992bab766603";s:7:"address";s:34:"r9GyWDa9ep66pqVdvGAq7FkgsEKwnNEux4";s:8:"sort_key";i:6;s:6:"effect";s:2:"-0";s:6:"failed";s:1:"f";s:5:"extra";s:1:"p";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:7;a:8:{s:11:"transaction";s:64:"91fe86ce880019cff9d00a0cbafee07cd366ec37be9238ce9e7b992bab766603";s:7:"address";s:33:"rvYAfWj5gh67oV6fW32ZzP3Aw4Eubs59B";s:8:"sort_key";i:7;s:6:"effect";s:1:"0";s:6:"failed";s:1:"f";s:5:"extra";s:1:"p";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:8;a:8:{s:11:"transaction";s:64:"91fe86ce880019cff9d00a0cbafee07cd366ec37be9238ce9e7b992bab766603";s:7:"address";s:34:"r9GyWDa9ep66pqVdvGAq7FkgsEKwnNEux4";s:8:"sort_key";i:8;s:6:"effect";s:3:"-12";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:9;a:8:{s:11:"transaction";s:64:"91fe86ce880019cff9d00a0cbafee07cd366ec37be9238ce9e7b992bab766603";s:7:"address";s:8:"the-void";s:8:"sort_key";i:9;s:6:"effect";s:2:"12";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:10;a:8:{s:11:"transaction";s:64:"a851faa0d892e976d7c5c5b3054df0391a81915a53dfc3772f13d451e9b54a46";s:7:"address";s:34:"rDotEHT93xJLUAvM3WAyNHY2iwpgTb9P8Z";s:8:"sort_key";i:10;s:6:"effect";s:3:"-12";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:11;a:8:{s:11:"transaction";s:64:"a851faa0d892e976d7c5c5b3054df0391a81915a53dfc3772f13d451e9b54a46";s:7:"address";s:8:"the-void";s:8:"sort_key";i:11;s:6:"effect";s:2:"12";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:12;a:8:{s:11:"transaction";s:64:"ab328ae324681c70e9185158a7534dc4140ec8772c3a87b35af6941ba1e181c2";s:7:"address";s:34:"rGBoiaky7DcgpZN8PkUfW2YQF2jfBWAsqx";s:8:"sort_key";i:12;s:6:"effect";s:3:"-10";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:13;a:8:{s:11:"transaction";s:64:"ab328ae324681c70e9185158a7534dc4140ec8772c3a87b35af6941ba1e181c2";s:7:"address";s:8:"the-void";s:8:"sort_key";i:13;s:6:"effect";s:2:"10";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:14;a:8:{s:11:"transaction";s:64:"bb5957ff0658015c466e76eda8b6019d5db5fc91e43fc3518448c99b443a76c6";s:7:"address";s:34:"rwHejp63Uns3BtwjBoYNDHkpQeKcgx5EH9";s:8:"sort_key";i:14;s:6:"effect";s:9:"-12000000";s:6:"failed";s:1:"t";s:5:"extra";s:1:"p";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:15;a:8:{s:11:"transaction";s:64:"bb5957ff0658015c466e76eda8b6019d5db5fc91e43fc3518448c99b443a76c6";s:7:"address";s:34:"r4hbm18fKYtjgu4cywkj3FtH9A5rjTkHyT";s:8:"sort_key";i:15;s:6:"effect";s:8:"12000000";s:6:"failed";s:1:"t";s:5:"extra";s:1:"p";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:16;a:8:{s:11:"transaction";s:64:"bb5957ff0658015c466e76eda8b6019d5db5fc91e43fc3518448c99b443a76c6";s:7:"address";s:34:"rwHejp63Uns3BtwjBoYNDHkpQeKcgx5EH9";s:8:"sort_key";i:16;s:6:"effect";s:3:"-12";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:17;a:8:{s:11:"transaction";s:64:"bb5957ff0658015c466e76eda8b6019d5db5fc91e43fc3518448c99b443a76c6";s:7:"address";s:8:"the-void";s:8:"sort_key";i:17;s:6:"effect";s:2:"12";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:18;a:8:{s:11:"transaction";s:64:"d5d22eaea5255ff3c9c9db230671d97241fffdc95f29d61d6d80d7f7c0f5db58";s:7:"address";s:34:"rNKXT1p7jpt5WxSRSzmUV6ZB6kY7jdqHmx";s:8:"sort_key";i:18;s:6:"effect";s:9:"-30000000";s:6:"failed";s:1:"f";s:5:"extra";s:1:"p";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:19;a:8:{s:11:"transaction";s:64:"d5d22eaea5255ff3c9c9db230671d97241fffdc95f29d61d6d80d7f7c0f5db58";s:7:"address";s:34:"r9UHbxPjWQCHLz5PUCRubjR19zTFhEGUoR";s:8:"sort_key";i:19;s:6:"effect";s:8:"30000000";s:6:"failed";s:1:"f";s:5:"extra";s:1:"p";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:20;a:8:{s:11:"transaction";s:64:"d5d22eaea5255ff3c9c9db230671d97241fffdc95f29d61d6d80d7f7c0f5db58";s:7:"address";s:34:"rNKXT1p7jpt5WxSRSzmUV6ZB6kY7jdqHmx";s:8:"sort_key";i:20;s:6:"effect";s:4:"-250";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}i:21;a:8:{s:11:"transaction";s:64:"d5d22eaea5255ff3c9c9db230671d97241fffdc95f29d61d6d80d7f7c0f5db58";s:7:"address";s:8:"the-void";s:8:"sort_key";i:21;s:6:"effect";s:3:"250";s:6:"failed";s:1:"f";s:5:"extra";s:1:"f";s:5:"block";i:3960046;s:4:"time";s:19:"2013-12-19 05:42:10";}}s:10:"currencies";N;}'],
        ];
    }
}

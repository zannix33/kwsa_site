            <!--START FOOTER-->
            <tr width="600">
                <td>
                    <div style="height:40px;width:100%;display:block">&nbsp;</div>
                </td>
            </tr>
            <tr>
                <td style="width:600px; background-color:#fff;">
                    <table cellpadding="0" cellspacing="0" width="600">
                        <tr width="600">
                            <td>
                                <div style="height:40px;width:100%;display:block">&nbsp;</div>
                            </td>
                        </tr>
                        <tr width="600">
                            <td width="200" style="padding-left:40px;"><a href="{{ url('/') }}" style="color:#002b54;">{{ str_replace('http://', 'www.', url('/')) }}</a></td>
                            <td width="400" style="padding-right:40px; text-align:right;">
                                {{--
                                <a href="{{ url('/terms-and-conditions') }}" style="color:#ffffff; margin-left:19px;">Terms &amp; Conditions</a>
                                <a href="{{ url('/privacy-policy') }}" style="color:#ffffff; margin-left:19px;">Privacy Policy</a>
                                --}}
                                <a href="{{ url('/contact') }}" style="color:#002b54; margin-left:19px;">Contact</a>
                            </td>
                        </tr>
                        <tr width="600">
                            <td>
                                <div style="height:40px;width:100%;display:block">&nbsp;</div>
                            </td>
                        </tr>
                    </table>

                    <table cellpadding="0" cellspacing="0" width="600">
                        <tr width="600">
                            <td>
                            </td>
                        </tr>
                        <tr width="600">
                            <td width="200" style="padding-left:40px; font-size:10px; line-height:30px; font-weight:300; letter-spacing:0.18px; text-transform:uppercase; color:#7e7e7e;">{{ setting('site_name') }} © {{ date('Y') }}
                                <!-- | <a href="{{ url('/') }}" style="font-size:10px; font-weight:300; letter-spacing:0.18px; text-transform:uppercase; color:#7e7e7e;"> Unsubscribe</a> -->
                            </td>
                            <td width="400" style="padding-right:40px; text-align:right;">
                                {{--
                                <a href="{{ setting('facebook_url', '#') }}" style="width:30px; height:30px; margin-left:8px;"><img src="{{ url('/') }}/images/mail/facebook.png" style="width:30px; height:30px;" alt="facebook"></a>
                                <a href="{{ setting('instagram_url', '#') }}" style="width:30px; height:30px; margin-left:8px;"><img src="{{ url('/') }}/images/mail/instagram.png" style="width:30px; height:30px;" alt="instagram"></a>
                                <a href="{{ setting('linked_in_url', '#') }}" style="width:30px; height:30px; margin-left:8px;"><img src="{{ url('/') }}/images/mail/linkedin.png" style="width:30px; height:30px;" alt="linkedin"></a>
                                <a href="{{ setting('youtube_url', '#') }}" style="width:30px; height:30px; margin-left:8px;"><img src="{{ url('/') }}/images/mail/youtube.png" style="width:30px; height:30px;" alt="youtube"></a>
                                --}}
                            </td>
                        </tr>
                        <tr width="600">
                            <td>
                                <div style="height:40px;width:100%;display:block">&nbsp;</div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!--END FOOTER INFO-->

            </table>

            </body>

            </html>

<?php 
    get_header();
    $locale = get_locale();
?>
    <main class="entrypage" id="entrypage">
        <!-- entry// -->
        <section class="entry">
            <div class="entry_container l-container">
                <div class="entry_left">
                    <div class="entry_sticky">
						<?php include 'components/entry-nav.php'; ?>
                    </div>
                </div>
                <div class="entry_right">
                    <div class="entry_tabs">
                        <div class="entry_content js-entry-content show-content" data-content="1">
                            <?php include 'components/recruitment.php'; ?>
                        </div>
                        <div class="entry_content js-entry-content" data-content="2">
                            <div class="entry_contact js-form txt7-fw">
								<?php if ($locale == 'en_US') : ?>
                                <?php echo do_shortcode('[contact-form-7 id="8c928be" title="Entry Contact EN" html_id="myForm"]') ?>
								<?php else : ?>
								<?php echo do_shortcode('[contact-form-7 id="03bc2d4" title="Entry Contact" html_id="myForm"]') ?>
								<?php endif; ?>

                                <div class="entry_contact_description">
                                    <?php if ($locale == 'en_US') : ?>
                                    <p>
                                        After uploading using a cloud storage service or data file transfer service (Dropbox, Google Drive, Fire Storage, etc.), 
                                        please enter the link URL. If the work data cannot be downloaded due to expiration or other reasons, your application will be invalid. 
                                        Please aim for file sizes to be up to 3MB per piece. 
                                        However, this does not apply to relatively large file formats such as videos.
                                    </p>
                                    <?php else : ?>
                                    <p>
                                        クラウドストレージサービス・データファイル転送サービス等<span class="time-fonts">（Dropbox、Google Drive、Fire
                                        Storage、etc）</span>を利用してアップロード後、リンク先URLを記してください。期限切れなどにより作品データのダウンロードができない場合は、応募を無効とさせていただきます。ファイルサイズは1点につき3MBまでを目処としてください。ただし動画など比較的容量の大きなファイル形式の場合はこの限りではありません。
                                    </p>
                                    <?php endif; ?>
                                </div>

                                <div class="entry_contact_privacy">
                                    <div class="entry_contact_privacy_content">
                                        <?php if ($locale == 'en_US') : ?>
                                        <p>
                                            ANRI株式会社（以下「当社」といいます。）は、個人情報保護の重要性について認識し、個人情報の保護に関する法律（以下「個人情報保護法」といいます。）を遵守すると共に、以下のプライバシーポリシー（以下「本プライバシーポリシー」といいます。）に従い、適切な取扱い及び保護に努めます。なお、本プライバシーポリシーにおいて別段の定めがない限り、本プライバシーポリシーにおける用語の定義は、個人情報保護法の定めに従います。<br><br>
                                            <span>1. 個人情報の定義</span><br><br>
                                            本プライバシーポリシーにおいて、個人情報とは、個人情報保護法第2条第1項により定義される個人情報を意味するものとします。<br><br>
                                            <span>2. 個人情報の利用目的</span><br><br>
                                            当社は、個人情報を以下の目的で利用いたします。また、当社は、以下の目的を達成するために、本人の同意を得た上で、個人情報を第三者に提供する場合があります。<br><br>
                                            2.1 投資事業に関して取得した個人情報の利用目的<br>
                                            (1)	当社又は当社の関連当事者が運営するファンド（以下「本ファンド」といます。）による出資の検討に利用するため<br>
                                            (2)	本ファンドの出資先のバリューアップ、出資先の管理監督、その他本ファンドの運営及び管理に利用するため<br>
                                            (3)	当社が管理又は運営するインキュベーション施設の管理又は運営のため<br>
                                            (4)	その他、上記利用目的に付随する目的のため<br><br>
                                            2.2 当社が主催又は協賛する投資事業以外のイベントにおいて取得した個人情報の利用目的<br>
                                            (1)	当社が主催又は協賛するイベントのご案内、お問い合わせ等への対応のため<br>
											(2)	当社のサービスの改善、新サービスの開発等のため<br>
											(3)	その他、上記利用目的に付随する目的のため<br><br>
											2.3 当社の役職員、役職員の応募者、株主又は新株予約権者に関して取得した個人情報の利用目的<br>
											(1)	雇用管理及び社内手続のため（役職員の個人情報について）、人材採用活動における選考及び連絡のため（応募者の個人情報について）<br>
											(2)	株主管理、会社法その他法令上の手続対応のため（株主、新株予約権者等の個人情報について）<br>
											(3)	その他、上記利用目的に付随する目的のため<br><br>
											<span>3. 個人情報利用目的の変更</span><br><br>
											当社は、個人情報の利用目的を関連性を有すると合理的に認められる範囲内において変更することがあり、変更した場合には個人情報の主体である個人（以下「本人」といいます。）に通知し又は公表します。<br><br>
											<span>4. 個人情報の利用</span><br><br>
											4.1 当社は、個人情報保護法その他の法令により許容される場合を除き、本人の同意を得ず、利用目的の達成に必要な範囲を超えて個人情報を取り扱いません。但し、次の場合はこの限りではありません。<br>
											(1)	法令に基づく場合<br>
											(2)	人の生命、身体又は財産の保護のために必要がある場合であって、本人の同意を得ることが困難であるとき<br>
											(3)	公衆衛生の向上又は児童の健全な育成の推進のために特に必要がある場合であって、本人の同意を得ることが困難であるとき<br>
											(4)	国の機関もしくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき<br>
											(5)	学術研究機関等に個人データを提供する場合であって、当該学術研究機関等が当該個人データを学術研究目的で取り扱う必要があるとき（当該個人データを取り扱う目的の一部が学術研究目的である場合を含み、個人の権利利益を不当に侵害するおそれがある場合を除く。）。<br><br>
											4.2 当社は、違法又は不当な行為を助長し、又は誘発するおそれがある方法により個人情報を利用しません。<br><br>
											<span>5. 個人情報の適正な取得</span><br><br>
											5.1 当社は、適正に個人情報を取得し、偽りその他不正の手段により取得しません。 <br><br>
											5.2 当社は、第三者から個人情報の提供を受けるに際しては、個人情報保護委員会規則で定めるところにより、次に掲げる事項の確認を行います。ただし、当該第三者による当該個人情報の提供が第4.1項各号のいずれかに該当する場合又は第 8.1 項各号のいずれかに該当する場合を除きます。<br>
											(1)	当該第三者の氏名又は名称及び住所、並びに法人の場合はその代表者（法人でない団体で代表者又は管理人の定めのあるものの場合は、その代表者又は管理人）の氏名<br>
											(2)	当該第三者による当該個人情報の取得の経緯<br><br>
											<span>6. 個人情報の安全管理</span><br><br>
											当社は、個人情報の紛失、破壊、改ざん及び漏洩などのリスクに対して、個人情報の安全管理が図られるよう、当社の従業員に対し、必要かつ適切な監督を行います。また、当社は、個人情報の取扱いの全部又は一部を委託する場合は、委託先において個人情報の安全管理が図られるよう、必要かつ適切な監督を行います。当社の保有個人データに関する具体的な安全管理措置の概要は、社内規程の整備、組織体制の整備、従業者の教育、不正アクセス等の防止、外的環境の把握等となりますが、具体的な安全管理措置の内容は、ご本人から後記のお問い合わせ窓口よりご連絡頂けましたら、遅滞なく回答いたします。<br><br>
											<span>7. 漏洩時の報告等</span><br><br>
											当社は、当社の取り扱う個人情報の漏洩、滅失、毀損等の事態が生じた場合において、個人情報保護法の定めに基づき個人情報保護委員会への報告及び本人への通知を要する場合には、かかる報告及び通知を行います。<br><br>
											<span>8. 第三者提供</span><br><br>
											8.1 当社は、第4.1項各号のいずれかに該当する場合を除くほか、あらかじめ本人の同意を得ないで、個人情報を第三者に提供しません。但し、次に掲げる場合は上記に定める第三者への提供には該当しません。<br>
											(1)	利用目的の達成に必要な範囲内において個人情報の取扱いの全部又は一部を委託することに伴って個人情報を提供する場合<br>
											(2)	合併その他の事由による事業の承継に伴って個人情報が提供される場合<br><br>
											8.2 第8.1項の定めにかかわらず、当社は、第4.1項各号のいずれかに該当する場合を除くほか、外国（個人情報保護法第28条に基づき個人情報保護委員会規則で指定される国を除きます。）にある第三者（個人情報保護法第 28 条に基づき個人情報保護委員会規則で指定される基準に適合する体制を整備している者を除きます。）に個人情報を提供する場合には、あらかじめ外国にある第三者への提供を認める旨の本人の同意を得るものとします。<br><br>
											8.3 第8.2項に基づき外国にある第三者への提供につき本人の同意を得る場合、以下の事項について本人に情報を提供するものとします。但し、第1号の事項が特定できない場合、第1号及び第2号の事項に代えて、第1号の事項が特定できない旨及びその理由、並びに当該事項に代わる本人に参考となるべき情報があれば当該情報を提供するものとします。<br>
											(1)	当該外国の名称<br>
											(2)	当該外国における個人情報の保護に関する制度に関する情報<br>
											(3)	当該第三者が講じる個人情報の保護のための措置に関する情報（当該情報を提供できない場合は、その旨及びその理由）<br><br>
											8.4 当社は、個人情報を第三者に提供したときは、個人情報保護法第29条に従い、記録の作成及び保存を行います。<br><br>
											8.5 当社は、第三者から個人情報の提供を受けるに際しては、個人情報保護法第30条に従い、必要な確認を行い、当該確認にかかる記録の作成及び保存を行うものとします。<br><br>
											<span>9. 個人情報等の開示</span><br><br>
											9.1 当社は、本人から、個人情報保護法の定めに基づき個人情報の開示を求められたときは、本人ご自身からのご請求であることを確認の上で、本人に対し、遅滞なく開示を行います（当該個人情報が存在しないときにはその旨を通知いたします。）。但し、個人情報保護法その他の法令により、当社が開示の義務を負わない場合は、この限りではありません。なお、個人情報の開示につきましては、手数料（1件あたり500円）を頂戴しておりますので、あらかじめ御了承ください。<br><br>
											9.2 前項の定めは、本人が識別される個人情報にかかる、第8.4項に基づき作成した第三者への提供にかかる記録及び第8.5項に基づき作成した第三者からの提供にかかる記録について準用するものとします。但し、手数料に関する定めを除きます。<br><br>
											<span>10. 個人情報の訂正等</span><br><br>
											当社は、本人から、個人情報が真実でないという理由によって、個人情報保護法の定めに基づきその内容の訂正、追加又は削除（以下「訂正等」といいます。）を求められた場合には、本人ご自身からのご請求であることを確認の上で、利用目的の達成に必要な範囲内において、遅滞なく必要な調査を行い、その結果に基づき、個人情報の内容の訂正等を行い、その旨を本人に通知します（訂正等を行わない旨の決定をしたときは、本人に対しその旨を通知いたします。）。但し、個人情報保護法その他の法令により、当社が訂正等の義務を負わない場合は、この限りではありません。<br><br>
											<span>11. 個人情報の利用停止等</span><br><br>
											当社は、本人から、(1)本人の個人情報が、あらかじめ公表された利用目的の範囲を超えて取り扱われている、若しくは違法若しくは不当な行為を助長し、若しくは誘発するおそれがある方法により利用されているという理由により、又は本人の個人情報が偽りその他不正の手段により取得されたものであるという理由により、個人情報保護法の定めに基づきその利用の停止又は消去（以下「利用停止等」といいます。）を求められた場合、(2)個人情報がご本人の同意なく第三者に提供されているという理由により、個人情報保護法の定めに基づきその提供の停止（以下「提供停止」といいます。）を求められた場合、又は(3)当社が本人の個人情報を利用する必要がなくなった場合、本人の個人情報にかかる個人情報保護法第26条第1項本文に規定する事態が生じた場合その他本人の個人情報の取扱により本人の権利又は正当な利益が害されるおそれがある場合に該当するという理由により、個人情報保護法の定めに基づきその利用停止等又は提供停止を求められた場合において、そのご請求に理由があることが判明した場合には、本人ご自身からのご請求であることを確認の上で、遅滞なく個人情報の利用停止等又は提供停止を行い、その旨を本人に通知します。但し、個人情報保護法その他の法令により、当社が利用停止等又は提供停止の義務を負わない場合は、この限りではありません。<br><br>
											<span>12. Cookie（クッキー）その他の技術の利用</span><br><br>
											当社のサービスは、Cookie及びこれに類する技術を利用することがあります。これらの技術は、当社による当社のサービスの利用状況等の把握に役立ち、サービス向上に資するものです。Cookieを無効化されたいユーザーは、ウェブブラウザの設定を変更することによりCookieを無効化することができます。但し、Cookieを無効化すると、当社のサービスの一部の機能をご利用いただけなくなる場合があります。<br><br>
											<span>13. お問い合わせ</span><br><br>
											開示等のお申出、ご意見、ご質問、苦情のお申出その他個人情報の取扱いに関するお問い合わせは、下記の窓口までお願い致します。<br><br>
											[個人情報取扱事業者の名称、住所及び代表者氏名]<br>
											〒106-6115 東京都港区六本木六丁目10-1 六本木ヒルズ森タワー15F <br>
											ANRI株式会社（代表取締役 佐俣安理） <br><br>
											[問い合わせ窓口]<br>
											E-mail：pa@anri.vc<br><br>
											<span>14. 継続的改善</span><br><br>
											当社は、個人情報の取扱いに関する運用状況を適宜見直し、継続的な改善に努めるものとし、必要に応じて、本プライバシーポリシーを変更することがあります。<br><br>
											2024年5月20日制定
                                        </p>
                                        <?php else : ?>
                                        <p>
                                            ANRI株式会社（以下「当社」といいます。）は、個人情報保護の重要性について認識し、個人情報の保護に関する法律（以下「個人情報保護法」といいます。）を遵守すると共に、以下のプライバシーポリシー（以下「本プライバシーポリシー」といいます。）に従い、適切な取扱い及び保護に努めます。なお、本プライバシーポリシーにおいて別段の定めがない限り、本プライバシーポリシーにおける用語の定義は、個人情報保護法の定めに従います。<br><br>
                                            <span>1. 個人情報の定義</span><br><br>
                                            本プライバシーポリシーにおいて、個人情報とは、個人情報保護法第2条第1項により定義される個人情報を意味するものとします。<br><br>
                                            <span>2. 個人情報の利用目的</span><br><br>
                                            当社は、個人情報を以下の目的で利用いたします。また、当社は、以下の目的を達成するために、本人の同意を得た上で、個人情報を第三者に提供する場合があります。<br><br>
                                            2.1 投資事業に関して取得した個人情報の利用目的<br>
                                            (1)	当社又は当社の関連当事者が運営するファンド（以下「本ファンド」といます。）による出資の検討に利用するため<br>
                                            (2)	本ファンドの出資先のバリューアップ、出資先の管理監督、その他本ファンドの運営及び管理に利用するため<br>
                                            (3)	当社が管理又は運営するインキュベーション施設の管理又は運営のため<br>
                                            (4)	その他、上記利用目的に付随する目的のため<br><br>
                                            2.2 当社が主催又は協賛する投資事業以外のイベントにおいて取得した個人情報の利用目的<br>
                                            (1)	当社が主催又は協賛するイベントのご案内、お問い合わせ等への対応のため<br>
											(2)	当社のサービスの改善、新サービスの開発等のため<br>
											(3)	その他、上記利用目的に付随する目的のため<br><br>
											2.3 当社の役職員、役職員の応募者、株主又は新株予約権者に関して取得した個人情報の利用目的<br>
											(1)	雇用管理及び社内手続のため（役職員の個人情報について）、人材採用活動における選考及び連絡のため（応募者の個人情報について）<br>
											(2)	株主管理、会社法その他法令上の手続対応のため（株主、新株予約権者等の個人情報について）<br>
											(3)	その他、上記利用目的に付随する目的のため<br><br>
											<span>3. 個人情報利用目的の変更</span><br><br>
											当社は、個人情報の利用目的を関連性を有すると合理的に認められる範囲内において変更することがあり、変更した場合には個人情報の主体である個人（以下「本人」といいます。）に通知し又は公表します。<br><br>
											<span>4. 個人情報の利用</span><br><br>
											4.1 当社は、個人情報保護法その他の法令により許容される場合を除き、本人の同意を得ず、利用目的の達成に必要な範囲を超えて個人情報を取り扱いません。但し、次の場合はこの限りではありません。<br>
											(1)	法令に基づく場合<br>
											(2)	人の生命、身体又は財産の保護のために必要がある場合であって、本人の同意を得ることが困難であるとき<br>
											(3)	公衆衛生の向上又は児童の健全な育成の推進のために特に必要がある場合であって、本人の同意を得ることが困難であるとき<br>
											(4)	国の機関もしくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって、本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき<br>
											(5)	学術研究機関等に個人データを提供する場合であって、当該学術研究機関等が当該個人データを学術研究目的で取り扱う必要があるとき（当該個人データを取り扱う目的の一部が学術研究目的である場合を含み、個人の権利利益を不当に侵害するおそれがある場合を除く。）。<br><br>
											4.2 当社は、違法又は不当な行為を助長し、又は誘発するおそれがある方法により個人情報を利用しません。<br><br>
											<span>5. 個人情報の適正な取得</span><br><br>
											5.1 当社は、適正に個人情報を取得し、偽りその他不正の手段により取得しません。 <br><br>
											5.2 当社は、第三者から個人情報の提供を受けるに際しては、個人情報保護委員会規則で定めるところにより、次に掲げる事項の確認を行います。ただし、当該第三者による当該個人情報の提供が第4.1項各号のいずれかに該当する場合又は第 8.1 項各号のいずれかに該当する場合を除きます。<br>
											(1)	当該第三者の氏名又は名称及び住所、並びに法人の場合はその代表者（法人でない団体で代表者又は管理人の定めのあるものの場合は、その代表者又は管理人）の氏名<br>
											(2)	当該第三者による当該個人情報の取得の経緯<br><br>
											<span>6. 個人情報の安全管理</span><br><br>
											当社は、個人情報の紛失、破壊、改ざん及び漏洩などのリスクに対して、個人情報の安全管理が図られるよう、当社の従業員に対し、必要かつ適切な監督を行います。また、当社は、個人情報の取扱いの全部又は一部を委託する場合は、委託先において個人情報の安全管理が図られるよう、必要かつ適切な監督を行います。当社の保有個人データに関する具体的な安全管理措置の概要は、社内規程の整備、組織体制の整備、従業者の教育、不正アクセス等の防止、外的環境の把握等となりますが、具体的な安全管理措置の内容は、ご本人から後記のお問い合わせ窓口よりご連絡頂けましたら、遅滞なく回答いたします。<br><br>
											<span>7. 漏洩時の報告等</span><br><br>
											当社は、当社の取り扱う個人情報の漏洩、滅失、毀損等の事態が生じた場合において、個人情報保護法の定めに基づき個人情報保護委員会への報告及び本人への通知を要する場合には、かかる報告及び通知を行います。<br><br>
											<span>8. 第三者提供</span><br><br>
											8.1 当社は、第4.1項各号のいずれかに該当する場合を除くほか、あらかじめ本人の同意を得ないで、個人情報を第三者に提供しません。但し、次に掲げる場合は上記に定める第三者への提供には該当しません。<br>
											(1)	利用目的の達成に必要な範囲内において個人情報の取扱いの全部又は一部を委託することに伴って個人情報を提供する場合<br>
											(2)	合併その他の事由による事業の承継に伴って個人情報が提供される場合<br><br>
											8.2 第8.1項の定めにかかわらず、当社は、第4.1項各号のいずれかに該当する場合を除くほか、外国（個人情報保護法第28条に基づき個人情報保護委員会規則で指定される国を除きます。）にある第三者（個人情報保護法第 28 条に基づき個人情報保護委員会規則で指定される基準に適合する体制を整備している者を除きます。）に個人情報を提供する場合には、あらかじめ外国にある第三者への提供を認める旨の本人の同意を得るものとします。<br><br>
											8.3 第8.2項に基づき外国にある第三者への提供につき本人の同意を得る場合、以下の事項について本人に情報を提供するものとします。但し、第1号の事項が特定できない場合、第1号及び第2号の事項に代えて、第1号の事項が特定できない旨及びその理由、並びに当該事項に代わる本人に参考となるべき情報があれば当該情報を提供するものとします。<br>
											(1)	当該外国の名称<br>
											(2)	当該外国における個人情報の保護に関する制度に関する情報<br>
											(3)	当該第三者が講じる個人情報の保護のための措置に関する情報（当該情報を提供できない場合は、その旨及びその理由）<br><br>
											8.4 当社は、個人情報を第三者に提供したときは、個人情報保護法第29条に従い、記録の作成及び保存を行います。<br><br>
											8.5 当社は、第三者から個人情報の提供を受けるに際しては、個人情報保護法第30条に従い、必要な確認を行い、当該確認にかかる記録の作成及び保存を行うものとします。<br><br>
											<span>9. 個人情報等の開示</span><br><br>
											9.1 当社は、本人から、個人情報保護法の定めに基づき個人情報の開示を求められたときは、本人ご自身からのご請求であることを確認の上で、本人に対し、遅滞なく開示を行います（当該個人情報が存在しないときにはその旨を通知いたします。）。但し、個人情報保護法その他の法令により、当社が開示の義務を負わない場合は、この限りではありません。なお、個人情報の開示につきましては、手数料（1件あたり500円）を頂戴しておりますので、あらかじめ御了承ください。<br><br>
											9.2 前項の定めは、本人が識別される個人情報にかかる、第8.4項に基づき作成した第三者への提供にかかる記録及び第8.5項に基づき作成した第三者からの提供にかかる記録について準用するものとします。但し、手数料に関する定めを除きます。<br><br>
											<span>10. 個人情報の訂正等</span><br><br>
											当社は、本人から、個人情報が真実でないという理由によって、個人情報保護法の定めに基づきその内容の訂正、追加又は削除（以下「訂正等」といいます。）を求められた場合には、本人ご自身からのご請求であることを確認の上で、利用目的の達成に必要な範囲内において、遅滞なく必要な調査を行い、その結果に基づき、個人情報の内容の訂正等を行い、その旨を本人に通知します（訂正等を行わない旨の決定をしたときは、本人に対しその旨を通知いたします。）。但し、個人情報保護法その他の法令により、当社が訂正等の義務を負わない場合は、この限りではありません。<br><br>
											<span>11. 個人情報の利用停止等</span><br><br>
											当社は、本人から、(1)本人の個人情報が、あらかじめ公表された利用目的の範囲を超えて取り扱われている、若しくは違法若しくは不当な行為を助長し、若しくは誘発するおそれがある方法により利用されているという理由により、又は本人の個人情報が偽りその他不正の手段により取得されたものであるという理由により、個人情報保護法の定めに基づきその利用の停止又は消去（以下「利用停止等」といいます。）を求められた場合、(2)個人情報がご本人の同意なく第三者に提供されているという理由により、個人情報保護法の定めに基づきその提供の停止（以下「提供停止」といいます。）を求められた場合、又は(3)当社が本人の個人情報を利用する必要がなくなった場合、本人の個人情報にかかる個人情報保護法第26条第1項本文に規定する事態が生じた場合その他本人の個人情報の取扱により本人の権利又は正当な利益が害されるおそれがある場合に該当するという理由により、個人情報保護法の定めに基づきその利用停止等又は提供停止を求められた場合において、そのご請求に理由があることが判明した場合には、本人ご自身からのご請求であることを確認の上で、遅滞なく個人情報の利用停止等又は提供停止を行い、その旨を本人に通知します。但し、個人情報保護法その他の法令により、当社が利用停止等又は提供停止の義務を負わない場合は、この限りではありません。<br><br>
											<span>12. Cookie（クッキー）その他の技術の利用</span><br><br>
											当社のサービスは、Cookie及びこれに類する技術を利用することがあります。これらの技術は、当社による当社のサービスの利用状況等の把握に役立ち、サービス向上に資するものです。Cookieを無効化されたいユーザーは、ウェブブラウザの設定を変更することによりCookieを無効化することができます。但し、Cookieを無効化すると、当社のサービスの一部の機能をご利用いただけなくなる場合があります。<br><br>
											<span>13. お問い合わせ</span><br><br>
											開示等のお申出、ご意見、ご質問、苦情のお申出その他個人情報の取扱いに関するお問い合わせは、下記の窓口までお願い致します。<br><br>
											[個人情報取扱事業者の名称、住所及び代表者氏名]<br>
											〒106-6115 東京都港区六本木六丁目10-1 六本木ヒルズ森タワー15F <br>
											ANRI株式会社（代表取締役 佐俣安理） <br><br>
											[問い合わせ窓口]<br>
											E-mail：pa@anri.vc<br><br>
											<span>14. 継続的改善</span><br><br>
											当社は、個人情報の取扱いに関する運用状況を適宜見直し、継続的な改善に努めるものとし、必要に応じて、本プライバシーポリシーを変更することがあります。<br><br>
											2024年5月20日制定
                                        </p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="entry_contact_privacy_check">
                                        <input id="js-checkbox" name="checkbox" type="checkbox" value="">
                                        <?php if ($locale == 'en_US') : ?>
                                        <p>I agree to the privacy policy</p>
                                        <?php else : ?>
                                        <p>プライバシーポリシーに同意する</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="entry_btn">
                                <button class="entry_btn_confirm js-contact-confirm" form="myForm" type="submit" id="btnConfirm">
                                    <?php if ($locale == 'en_US') : ?>
                                    <p class="txt7-fw">Confirmation</p>
                                    <?php else : ?>
                                    <p class="txt7-fw">確認</p>
                                    <?php endif; ?>
                                    <span class="arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16.135" viewBox="0 0 20 16.135">
                                            <path id="Path_1289" data-name="Path 1289" d="M12,0l5.883,7.282v.071H0V8.781H17.886v.071L12,16.135h1.6L20,8.068,13.6,0Z" transform="translate(0)"/>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //entry -->

        <?php include 'components/jbtracker.php'; ?>
    </main>
<?php get_footer(); ?>
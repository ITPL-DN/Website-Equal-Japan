<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1024">
    <title>EQUAL VIET NAM - 海外調達・輸入品</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-medium-gray font-meiryo min-w-[1024px] overflow-x-auto">
    
    <!-- Navbar Component -->
    <x-header />

    <!-- Hero Banner -->
    <div class="max-w-5xl mx-auto">
        <img src="{{ asset('assets/banner.png') }}" class="w-full h-auto" alt="海外調達でコストダウン！" />
    </div>

    <!-- Main Content Area -->
    <main class="max-w-5xl mx-auto px-0 py-lg flex flex-row gap-8">
        
        <!-- Left Content -->
        <div class="w-full" style="max-width: 72%; flex: 0 0 72%;">
            <!-- Breadcrumbs -->
            <div class="text-[12px] text-medium-gray mb-md">
                トップページ / 海外調達・輸入品
            </div>

            <!-- Main Heading -->
            <h1 class="text-[26px] font-bold text-dark-gray mb-md border-b-[2px] border-primary-blue pb-[5px] flex items-center">
                <span class="mr-2 text-primary-blue">|</span> 海外調達・輸入品（コストダウン）
            </h1>

            <!-- Message Box -->
            <div class="bg-[#f1f1f1] p-sm mb-lg">
                <div class="bg-white p-lg flex flex-row items-center justify-between border-[2px] border-[#f1f1f1]">
                    <div class="text-left w-full flex-1 pr-md">
                        <p class="text-[14px] font-bold mb-md text-center">精密機械メーカーの調達部門、<br>購買部門のご担当者様へ</p>
                        <h2 class="text-[24px] font-bold text-center bg-light-gray-background py-md">日本品質の海外調達を<br>提案いたします</h2>
                    </div>
                    <div class="mt-md  flex flex-col items-center flex-shrink-0 w-[140px]">
                        <!-- Using placeholder for now, you can replace with actual image later -->
                        <div class="w-[120px] h-[120px] bg-light-gray overflow-hidden mb-[5px]">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=120&h=120&q=80" alt="担当者" class="w-full h-full object-cover" />
                        </div>
                        <span class="text-[11px] font-bold">担当／木村</span>
                    </div>
                </div>
            </div>

            <p class="text-[15px] font-bold text-dark-gray text-center mb-lg">
                EQUAL VIET NAMなら、安心の国内検査、無料サンプル、しかもローコスト！
            </p>

            <div class="flex justify-center mb-md">
                <svg class="w-10 h-10 text-arrow-gray" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M4.2 7.8l7.8 7.8 7.8-7.8 2.4 2.4-10.2 10.2-10.2-10.2z"/>
                </svg>
            </div>

            <!-- Centered Header with line behind -->
            <div class="relative text-center mb-xl flex items-center justify-center">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-[#999999]"></div>
                </div>
                <h2 class="relative z-10 inline-block bg-white px-[40px] py-[25px] text-[26px] font-bold text-dark-gray leading-[1.4]">
                    金属加工の<br>海外調達・輸入代行<br>コストダウンの提案
                </h2>
            </div>

            <!-- Light Gray Text Box with Blue Text -->
            <div class="bg-gray-blue-bg text-bright-blue font-bold text-center py-[12px] text-[15px]">
                価格競争激化のため、コストダウンはメーカーにとって非常に重要な業務です
            </div>

            <!-- Video Section -->
            <div class="mt-lg">
                <div class="relative w-full aspect-video bg-black flex items-center justify-center mb-sm cursor-pointer group">
                    <img src="https://images.unsplash.com/photo-1565439399-5f252dfcb17b?auto=format&fit=crop&w=800&q=80" alt="Video thumbnail" class="w-full h-full object-cover opacity-80 group-hover:opacity-90 transition" />
                    <!-- YouTube Play Button Overlay -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-16 h-16 text-red-600 drop-shadow-md" viewBox="0 0 68 48"><path class="fill-current" d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55 C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19 C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"></path><path fill="#fff" d="M 45,24 27,14 27,34"></path></svg>
                    </div>
                </div>
                <div class="flex flex-row gap-sm">
                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?auto=format&fit=crop&w=400&q=80" alt="Factory process 1" class="w-full /2 h-auto object-cover" />
                    <img src="https://images.unsplash.com/photo-1581092335397-9583eb92d232?auto=format&fit=crop&w=400&q=80" alt="Factory process 2" class="w-full /2 h-auto object-cover" />
                </div>
            </div>

            <!-- Description Text -->
            <div class="mt-lg text-[13px] leading-[1.8] text-dark-gray">
                <p class="mb-md">今まで安かろう、悪かろうと言われていた中国製部品が当社の指導と品質管理の下で大きく改善（2024年度の不良率0.05%）。さらに、納期も大幅短縮（日本のメーカー並）できるようになりました。</p>
                <p class="mb-md"><a href="#" class="text-bright-blue font-bold hover:underline">高精度な海外調達で<span class="text-[15px] text-[#ff6600]">30%のコストカット</span>を実現しましょう。</a></p>
                <p>コスト、品質共に満足して頂けます。<br>単独で海外調査、中国調査を行なう前に、是非お問い合わせ下さい。</p>
            </div>

            <!-- Green CTA Area -->
            <div class="mt-xl border-[2px] border-cta-green p-[10px]">
                <div class="text-center font-bold text-cta-green mb-2 text-[14px]">
                    まずは、お気軽にご相談ください。お電話でのお問い合わせも承っております。
                </div>
                <a href="#" class="block bg-gradient-to-b from-cta-light-green to-cta-green text-white text-center py-md rounded-full text-[24px] font-bold shadow-md hover:from-cta-hover-light hover:to-cta-hover-dark transition flex items-center justify-center">
                    <span class="bg-white text-cta-green rounded-full w-[28px] h-[28px] flex items-center justify-center text-[18px] mr-sm font-black pt-[2px]">▶</span> お問い合わせ・見積依頼はこちら
                </a>
                <div class="flex flex-row justify-center mt-3 gap-sm">
                    <span class="border border-cta-green text-cta-green font-bold text-[12px] px-3 py-1 rounded-full bg-white text-center">小ロット・短納期・特急品もご相談ください</span>
                    <span class="border border-cta-green text-cta-green font-bold text-[12px] px-3 py-1 rounded-full bg-white text-center">ZOOM等によるオンラインミーティング対応可能</span>
                </div>
            </div>

            <!-- Warning / Notice Box -->
            <div class="mt-xl bg-gray-box p-sm">
                <div class="bg-white p-lg border border-[#e5e7eb] shadow-sm">
                    <h3 class="text-center text-[15px] text-dark-gray mb-1">《お伝えしておきたいこと》</h3>
                    <p class="text-center text-[15px] text-dark-gray mb-lg leading-[1.8]">
                        製品クオリティは上がってきておりますが、<br>超高精度、超高難度の製品は日本製に及ばない場合がございます。
                    </p>
                    <div class="flex flex-row gap-lg items-center">
                        <div class="flex-1 text-[14px] text-dark-gray w-full pl-lg">
                            <p class="mb-sm">たとえば、</p>
                            <ul class="list-disc pl-lg space-y-xs">
                                <li>公差0.01未満での加工（超精密部品）</li>
                                <li>鏡面加工（職人技レベル）など</li>
                            </ul>
                        </div>
                        <div class="flex-1 bg-warning-inner-bg p-md text-[14px] text-warning-text w-full">
                            <p class="mb-xs">精度要求が0.01以上の製品に関しては、2、<br>3次加工も含めて満足できる製品を提供いた<br>します。</p>
                            <p>※必ず日本で検品を行ないます。</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Links Box -->
            <div class="mt-lg bg-gray-box p-sm mb-2xl">
                <div class="bg-white p-lg border border-[#e5e7eb] shadow-sm">
                    <div class="text-[13px] font-bold text-dark-gray mb-md">このページのコンテンツ：</div>
                    <div class="grid grid-cols-2 gap-x-lg gap-y-md text-[14px]">
                        <a href="#" class="flex items-center text-teal-text hover:opacity-80 transition group">
                            <span class="bg-teal-button text-white w-[22px] h-[22px] flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white stroke-[4px]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                            <span class="border-b border-teal-button pb-[1px] leading-none">EQUAL VIET NAMの海外調達をお勧めする理由</span>
                        </a>
                        <a href="#" class="flex items-center text-teal-text hover:opacity-80 transition group">
                            <span class="bg-teal-button text-white w-[22px] h-[22px] flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white stroke-[4px]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                            <span class="border-b border-teal-button pb-[1px] leading-none">製品のお届けまでの流れ</span>
                        </a>
                        <a href="#" class="flex items-center text-teal-text hover:opacity-80 transition group">
                            <span class="bg-teal-button text-white w-[22px] h-[22px] flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white stroke-[4px]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                            <span class="border-b border-teal-button pb-[1px] leading-none">担当者のミッション(思い)</span>
                        </a>
                        <a href="#" class="flex items-center text-teal-text hover:opacity-80 transition group">
                            <span class="bg-teal-button text-white w-[22px] h-[22px] flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white stroke-[4px]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                            <span class="border-b border-teal-button pb-[1px] leading-none">輸入製品の紹介と作業風景</span>
                        </a>
                        <a href="#" class="flex items-center text-teal-text hover:opacity-80 transition group">
                            <span class="bg-teal-button text-white w-[22px] h-[22px] flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white stroke-[4px]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                            <span class="border-b border-teal-button pb-[1px] leading-none">海外調達事例</span>
                        </a>
                        <a href="#" class="flex items-center text-teal-text hover:opacity-80 transition group">
                            <span class="bg-teal-button text-white w-[22px] h-[22px] flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white stroke-[4px]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                            <span class="border-b border-teal-button pb-[1px] leading-none">海外調達のQ＆A</span>
                        </a>
                        <a href="#" class="flex items-center text-teal-text hover:opacity-80 transition group">
                            <span class="bg-teal-button text-white w-[22px] h-[22px] flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white stroke-[4px]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                            <span class="border-b border-teal-button pb-[1px] leading-none">コストダウン 4つのコツ</span>
                        </a>
                        <a href="#" class="flex items-center text-teal-text hover:opacity-80 transition group">
                            <span class="bg-teal-button text-white w-[22px] h-[22px] flex items-center justify-center mr-3 flex-shrink-0">
                                <svg class="w-3 h-3 text-white stroke-[4px]" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                            <span class="border-b border-teal-button pb-[1px] leading-none">EQUAL VIET NAMの金属加工、海外調達の特徴</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Section: Reasons to Recommend -->
            <div class="mt-2xl">
                 <div class="flex justify-center mb-md">
                <svg class="w-10 h-10 text-arrow-gray" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M4.2 7.8l7.8 7.8 7.8-7.8 2.4 2.4-10.2 10.2-10.2-10.2z"/>
                </svg>
            </div>

            <!-- Centered Header with line behind -->
            <div class="relative text-center mb-xl flex items-center justify-center">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-[#999999]"></div>
                </div>
                <h2 class="relative z-10 inline-block bg-white px-[40px] py-[25px] text-[26px] font-bold text-dark-gray leading-[1.4]">
                      EQUAL VIET NAMの海外調達を<br>
                            お勧めする理由
                </h2>
            </div>

                <div class="grid grid-cols-2 gap-lg mb-lg">
                    <!-- Point 1 -->
                    <div class="flex flex-col">
                        <div class="flex items-center mb-sm">
                            <div class="bg-teal-dark text-white text-center w-[36px] h-[36px] flex flex-col justify-center items-center leading-none mr-3 flex-shrink-0">
                                <span class="text-[9px] mb-[1px]">Point</span>
                                <span class="text-[20px] font-bold">1</span>
                            </div>
                            <h3 class="text-[16px] font-bold text-dark-gray">小ロット、短納期に対応！</h3>
                        </div>
                        <div class="bg-gray-blue-bg p-md text-[13px] text-dark-gray flex-grow">
                            <div class="flex items-start mb-sm">
                                <svg class="w-[18px] h-[18px] text-primary-blue mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                <p class="leading-[1.6]">
                                    <span class="text-primary-blue">従来はコンテナ、パレットでの輸入が</span>一般的でしたが、<span class="text-primary-blue">小ロットの製品も対応可能です。</span><br><span class="text-[11px]">※船便、航空便、EMS他</span>
                                </p>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-[18px] h-[18px] text-primary-blue mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                <p class="leading-[1.6]"><span class="text-primary-blue">納期も3日間から対応可能です。</span><br>ご相談下さい。</p>
                            </div>
                        </div>
                    </div>

                    <!-- Point 2 -->
                    <div class="flex flex-col">
                        <div class="flex items-center mb-sm">
                            <div class="bg-teal-dark text-white text-center w-[36px] h-[36px] flex flex-col justify-center items-center leading-none mr-3 flex-shrink-0">
                                <span class="text-[9px] mb-[1px]">Point</span>
                                <span class="text-[20px] font-bold">2</span>
                            </div>
                            <h3 class="text-[16px] font-bold text-dark-gray">簡単・安心！</h3>
                        </div>
                        <div class="bg-gray-blue-bg p-md text-[13px] text-dark-gray flex-grow">
                            <div class="flex items-start mb-sm">
                                <svg class="w-[18px] h-[18px] text-primary-blue mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                <p class="leading-[1.6]">慣れない輸入、海外取引は不安があります。品質、言葉、コミュニケーションなど色んな障壁があります。</p>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-[18px] h-[18px] text-primary-blue mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                <p class="leading-[1.6]">当社にお任せ頂ければ現地スタッフ、国内スタッフが製品化まで連携して、<span class="text-bright-blue border-b border-bright-blue">丁寧に対応</span>させて頂きます。</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Point 3 -->
                <div class="mb-xl">
                    <div class="flex items-center mb-sm">
                        <div class="bg-teal-dark text-white text-center w-[36px] h-[36px] flex flex-col justify-center items-center leading-none mr-3">
                            <span class="text-[9px] mb-[1px]">Point</span>
                            <span class="text-[20px] font-bold">3</span>
                        </div>
                        <h3 class="text-[16px] font-bold text-dark-gray">高品質！</h3>
                    </div>
                    <div class="bg-gray-blue-bg p-md text-[13px] text-dark-gray">
                        <div class="flex items-start mb-2">
                            <svg class="w-[18px] h-[18px] text-primary-blue mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                            <p class="leading-[1.6]">製造元は日本大手メーカーと長年の取引実績のある工場のみです。</p>
                        </div>
                        <div class="flex items-start mb-2">
                            <svg class="w-[18px] h-[18px] text-primary-blue mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                            <p class="leading-[1.6]">検品は基本的に全数量チェックいたします。</p>
                        </div>
                        <div class="flex items-start mb-2">
                            <svg class="w-[18px] h-[18px] text-primary-blue mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                            <p class="leading-[1.6]">量産前には必ずサンプルを作成して品質をチェック致します。<br>試作代は<span class="text-primary-blue">基本無料</span>です。</p>
                        </div>
                        <div class="flex items-start mb-2">
                            <svg class="w-[18px] h-[18px] text-primary-blue mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                            <p class="leading-[1.6]">もちろん、検査書、材料証明書も提出可能です。</p>
                        </div>
                        <div class="flex items-start mb-2">
                            <svg class="w-[18px] h-[18px] text-primary-blue mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                            <p class="leading-[1.6] text-primary-blue">コストのお悩みを全面解決するお手伝いをいたします。</p>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-[18px] h-[18px] text-primary-blue mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                            <p class="leading-[1.6] text-primary-blue">安価、高品質で価格競争力のある輸入品をお届け致します。</p>
                        </div>
                    </div>
                </div>

                <!-- Image Grid -->
                <div class="grid grid-cols-3 gap-[2px] mb-lg">
                    <div class="relative group overflow-hidden">
                        <img src="https://picsum.photos/400/300?random=1" alt="超硬 ワイヤー加工 研削加工" class="w-full h-auto" />
                        <div class="absolute bottom-0 w-full bg-[#1b2b50]/90 text-white text-center text-[11px] font-bold py-2">超硬 ワイヤー加工 研削加工</div>
                    </div>
                    <div class="relative group overflow-hidden">
                        <img src="https://picsum.photos/400/300?random=2" alt="アルミマシニング加工" class="w-full h-auto" />
                        <div class="absolute bottom-0 w-full bg-[#131a33]/90 text-white text-center text-[11px] font-bold py-2">アルミマシニング加工</div>
                    </div>
                    <div class="relative group overflow-hidden">
                        <img src="https://picsum.photos/400/300?random=3" alt="ステンレス絞り加工" class="w-full h-auto" />
                        <div class="absolute bottom-0 w-full bg-[#2e3e48]/90 text-white text-center text-[11px] font-bold py-2">ステンレス絞り加工</div>
                    </div>
                    <div class="relative group overflow-hidden">
                        <img src="https://picsum.photos/400/300?random=4" alt="鉄製プレス加工品" class="w-full h-auto" />
                        <div class="absolute bottom-0 w-full bg-[#183965]/90 text-white text-center text-[11px] font-bold py-2">鉄製プレス加工品</div>
                    </div>
                    <div class="relative group overflow-hidden">
                        <img src="https://picsum.photos/400/300?random=5" alt="セラミックベアリング" class="w-full h-auto" />
                        <div class="absolute bottom-0 w-full bg-[#3d443c]/90 text-white text-center text-[11px] font-bold py-2">セラミックベアリング</div>
                    </div>
                    <div class="relative group overflow-hidden">
                        <img src="https://picsum.photos/400/300?random=6" alt="表面鏡" class="w-full h-auto" />
                        <div class="absolute bottom-0 w-full bg-[#202020]/90 text-white text-center text-[11px] font-bold py-2">表面鏡</div>
                    </div>
                </div>

                <!-- Products Box -->
                <div class="bg-gray-box p-sm mb-2xl">
                    <div class="bg-white p-lg border border-[#e5e7eb] shadow-sm">
                        <div class="text-[12px] font-bold text-dark-gray mb-1">調達可能製品分野：</div>
                        <p class="text-[14px] text-dark-gray leading-[1.8]">
                            切削加工、冷間圧造、プレス加工、板金加工、樹脂成型、ダイカスト、ロストワックス、ネジ製品、LED製品、ガラス製品、その他
                        </p>
                    </div>
                </div>

                <!-- Flow Section -->
                <div class="mt-2xl mb-xl">
                    <div class="flex justify-center mb-md">
                        <svg class="w-10 h-10 text-arrow-gray" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M4.2 7.8l7.8 7.8 7.8-7.8 2.4 2.4-10.2 10.2-10.2-10.2z"/>
                        </svg>
                    </div>

                     <div class="relative text-center mb-xl flex items-center justify-center">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-[#999999]"></div>
                        </div>
                        <h2 class="relative z-10 inline-block bg-white px-[40px] py-[25px] text-[26px] font-bold text-dark-gray leading-[1.4]">
                            製品お届けまでの流れ <br> (海外調達の流れ)
                        </h2>
                    </div>
                   
                    <!-- Flow Diagram -->
                    <div class="flex flex-col items-center">
                        <!-- Step 1 -->
                        <div class="flex items-center mb-2">
                            <div class="w-[38px] h-[38px] rounded-full bg-primary-blue text-white flex items-center justify-center font-bold mr-4 flex-shrink-0 text-[16px]">1</div>
                            <span class="font-bold text-dark-gray text-[16px]">お見積り依頼</span>
                        </div>
                        <div class="mb-2">
                            <svg class="w-8 h-8 text-[#555555]" fill="currentColor" viewBox="0 0 24 24"><path d="M4.2 7.8l7.8 7.8 7.8-7.8 2.4 2.4-10.2 10.2-10.2-10.2z"/></svg>
                        </div>
                        
                        <!-- Step 2 -->
                        <div class="flex items-center mb-2">
                            <div class="w-[38px] h-[38px] rounded-full bg-primary-blue text-white flex items-center justify-center font-bold mr-4 flex-shrink-0 text-[16px]">2</div>
                            <span class="font-bold text-dark-gray text-[16px]">生産国選定</span>
                        </div>
                        <div class="mb-2">
                            <svg class="w-8 h-8 text-[#555555]" fill="currentColor" viewBox="0 0 24 24"><path d="M4.2 7.8l7.8 7.8 7.8-7.8 2.4 2.4-10.2 10.2-10.2-10.2z"/></svg>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex items-center mb-2">
                            <div class="w-[38px] h-[38px] rounded-full bg-primary-blue text-white flex items-center justify-center font-bold mr-4 flex-shrink-0 text-[16px]">3</div>
                            <span class="font-bold text-dark-gray text-[16px]">見積り回答</span>
                        </div>
                        <div class="mb-2">
                            <svg class="w-8 h-8 text-[#555555]" fill="currentColor" viewBox="0 0 24 24"><path d="M4.2 7.8l7.8 7.8 7.8-7.8 2.4 2.4-10.2 10.2-10.2-10.2z"/></svg>
                        </div>

                        <!-- Step 4 -->
                        <div class="flex items-center mb-2">
                            <div class="w-[38px] h-[38px] rounded-full bg-primary-blue text-white flex items-center justify-center font-bold mr-4 flex-shrink-0 text-[16px]">4</div>
                            <span class="font-bold text-dark-gray text-[16px]">試作製作</span>
                        </div>
                        <div class="mb-2">
                            <svg class="w-8 h-8 text-[#555555]" fill="currentColor" viewBox="0 0 24 24"><path d="M4.2 7.8l7.8 7.8 7.8-7.8 2.4 2.4-10.2 10.2-10.2-10.2z"/></svg>
                        </div>

                        <!-- Step 5 -->
                        <div class="flex items-center mb-2">
                            <div class="w-[38px] h-[38px] rounded-full bg-primary-blue text-white flex items-center justify-center font-bold mr-4 flex-shrink-0 text-[16px]">5</div>
                            <span class="font-bold text-dark-gray text-[16px]">生産国検品</span>
                        </div>
                        <div class="mb-2">
                            <svg class="w-8 h-8 text-[#555555]" fill="currentColor" viewBox="0 0 24 24"><path d="M4.2 7.8l7.8 7.8 7.8-7.8 2.4 2.4-10.2 10.2-10.2-10.2z"/></svg>
                        </div>

                        <!-- Step 6 -->
                        <div class="flex items-center mb-2">
                            <div class="w-[38px] h-[38px] rounded-full bg-primary-blue text-white flex items-center justify-center font-bold mr-4 flex-shrink-0 text-[16px]">6</div>
                            <span class="font-bold text-dark-gray text-[16px]">国内検品</span>
                        </div>
                        <div class="mb-2">
                            <svg class="w-8 h-8 text-[#555555]" fill="currentColor" viewBox="0 0 24 24"><path d="M4.2 7.8l7.8 7.8 7.8-7.8 2.4 2.4-10.2 10.2-10.2-10.2z"/></svg>
                        </div>

                        <!-- Step 7 -->
                        <div class="flex items-center mb-2">
                            <div class="w-[38px] h-[38px] rounded-full bg-primary-blue text-white flex items-center justify-center font-bold mr-4 flex-shrink-0 text-[16px]">7</div>
                            <span class="font-bold text-dark-gray text-[16px]">お客様確認</span>
                        </div>
                        <div class="mb-2">
                            <svg class="w-8 h-8 text-[#555555]" fill="currentColor" viewBox="0 0 24 24"><path d="M4.2 7.8l7.8 7.8 7.8-7.8 2.4 2.4-10.2 10.2-10.2-10.2z"/></svg>
                        </div>

                        <!-- Step 8 -->
                        <div class="flex items-center mb-2">
                            <div class="w-[38px] h-[38px] rounded-full bg-primary-blue text-white flex items-center justify-center font-bold mr-4 flex-shrink-0 text-[16px]">8</div>
                            <span class="font-bold text-dark-gray text-[16px]">量産製作</span>
                        </div>
                        <div class="mb-2">
                            <svg class="w-8 h-8 text-[#555555]" fill="currentColor" viewBox="0 0 24 24"><path d="M4.2 7.8l7.8 7.8 7.8-7.8 2.4 2.4-10.2 10.2-10.2-10.2z"/></svg>
                        </div>

                        <!-- Step 9 -->
                        <div class="flex items-center mb-2">
                            <div class="w-[38px] h-[38px] rounded-full bg-primary-blue text-white flex items-center justify-center font-bold mr-4 flex-shrink-0 text-[16px]">9</div>
                            <span class="font-bold text-dark-gray text-[16px]">検品</span>
                        </div>
                        <div class="mb-2">
                            <svg class="w-8 h-8 text-[#555555]" fill="currentColor" viewBox="0 0 24 24"><path d="M4.2 7.8l7.8 7.8 7.8-7.8 2.4 2.4-10.2 10.2-10.2-10.2z"/></svg>
                        </div>

                        <!-- Step 10 -->
                        <div class="flex items-center">
                            <div class="w-[38px] h-[38px] rounded-full bg-primary-blue text-white flex items-center justify-center font-bold mr-4 flex-shrink-0 text-[14px]">10</div>
                            <span class="font-bold text-dark-gray text-[16px]">お客様指定倉庫納品</span>
                        </div>
                    </div>
                </div>

                <!-- Shipping & Additional Info Section -->
                <div class="bg-gray-blue-bg p-md mt-xl mb-xl">
                    <div class="text-[13px] text-dark-gray leading-[1.8]">
                        <div class="flex items-start mb-3">
                            <svg class="w-[18px] h-[18px] text-primary-blue mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                            <p class="leading-[1.8]"><span class="font-bold text-primary-blue">輸送方法：</span>船便、航空便、DHL、佐川等</p>
                        </div>
                        <div class="flex items-start mb-3">
                            <svg class="w-[18px] h-[18px] text-primary-blue mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                            <p class="leading-[1.8]"><span class="font-bold text-primary-blue">到着港：</span>東京港、横浜港、名古屋港、大阪港、神戸港 他</p>
                        </div>
                        <div class="flex items-start mb-3">
                            <svg class="w-[18px] h-[18px] text-primary-blue mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                            <p class="leading-[1.8]"><span class="font-bold text-primary-blue">量産製品は、量産前に必ず試作を製作いたします。</span><br>そのため、量産お届けに<span class="font-bold text-primary-blue">初回１～３ヶ月お時間を頂く必要がございます。</span><br>良い製品をお届けするためにもご了承ください。<br><span class="text-[11px]">※小ロット製品でサンプル不要な場合は納期2週間から</span></p>
                        </div>
                        <div class="flex items-start mb-3">
                            <svg class="w-[18px] h-[18px] text-primary-blue mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                            <p class="leading-[1.8]">中国国内では一工場が材料調達から完成品まで製作するため、2次加工、3次加工も<br>ワンストップで対応可能です。</p>
                        </div>
                        <div class="flex items-start mb-3">
                            <svg class="w-[18px] h-[18px] text-primary-blue mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                            <p class="leading-[1.8]">金属加工製品以外にもLED、ガラス、表面鏡等、ものづくりに関わる製品の調達もお<br>任せ下さい。<span class="text-bright-blue border-b border-bright-blue">お探しの製品がございましたら中国国内でお探しします。</span></p>
                        </div>
                        <div class="flex items-start mb-4">
                            <svg class="w-[18px] h-[18px] text-primary-blue mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                            <p class="leading-[1.8]">自社製品の海外展開もご相談下さい。</p>
                        </div>
                    </div>
                </div>

                <!-- Packaging Photos -->
                <div class="mb-xl">
                    <div class="grid grid-cols-3 gap-[2px] mb-3">
                        <div class="overflow-hidden">
                            <img src="https://picsum.photos/300/220?random=10" alt="梱包写真1" class="w-full h-auto" />
                        </div>
                        <div class="overflow-hidden">
                            <img src="https://picsum.photos/300/220?random=11" alt="梱包写真2" class="w-full h-auto" />
                        </div>
                        <div class="overflow-hidden">
                            <img src="https://picsum.photos/300/220?random=12" alt="梱包写真3" class="w-full h-auto" />
                        </div>
                    </div>
                    <p class="text-[12px] text-dark-gray text-center">▲表面鏡の様な割れやすい製品はこの様に厳重に梱包致します。</p>
                </div>
                </div>

                <!-- Mission Section -->
                <div class="border-[4px] border-double border-[#c0cfdb] p-lg mb-2xl bg-white">
                    <!-- Title -->
                    <h2 class="text-center text-[22px] font-bold text-dark-gray mb-3">担当者のミッション(思い)</h2>
                    <div class="flex h-[2px] w-full mb-md">
                        <div class="w-[20%] bg-primary-blue"></div>
                        <div class="w-[80%] bg-[#999999]"></div>
                    </div>

                    <!-- Intro Text -->
                    <p class="text-[13px] text-dark-gray leading-[1.8] mb-md">
                        たとえ世界的な価格競争に巻き込まれようとも日本製造業の衰退を断固として拒否いたします。<br>
                        私達はものづくり企業に対し、コスト削減のためにVA案、海外調達の提案をし、コスト圧縮のお手伝いをいたします。
                    </p>

                    <!-- Two Blocks Container -->
                    <div class="flex flex-row gap-6">
                        <!-- Block 1 -->
                        <div class="w-1/2 flex flex-col">
                            <div class="border-t border-dotted border-[#999999] pt-4 mb-2"></div>
                            <div class="flex flex-row">
                                <div class="text-[12px] text-dark-gray leading-[1.6] flex-1 pr-3">
                                    <p class="mb-3">担当の木村です。価格がお客様の購買動機を大きく決める時代です。<span class="text-primary-blue">価格競争に負けて日本のものづくりが無くなってはいけません。</span></p>
                                    <p class="mb-3">製造業は日本の礎です。お客様はアイデアやソフトに集中し、ハード面は海外調達を含め私達にお任せ下さい。</p>
                                    <p>価格競争に挑む、もの作り企業のお手伝いを致します。お気軽にご相談下さい。</p>
                                </div>
                                <div class="w-[110px] flex-shrink-0 flex flex-col items-center">
                                    <img src="https://picsum.photos/110/110?random=20" alt="担当／木村" class="w-full h-auto mb-1">
                                    <span class="text-[10px] text-dark-gray">担当／木村</span>
                                </div>
                            </div>
                        </div>

                        <!-- Block 2 -->
                        <div class="w-1/2 flex flex-col">
                            <div class="border-t border-dotted border-[#999999] pt-4 mb-2"></div>
                            <div class="flex flex-row">
                                <div class="text-[12px] text-dark-gray leading-[1.6] flex-1 pr-3">
                                    <p class="mb-3">品質管理の黄と申します。中国湖北省の出身です。</p>
                                    <p class="mb-3">中国で培った経験を活かし、品質管理を担当しております。<span class="text-primary-blue">海外調達は、私にお任せください！</span></p>
                                    <p>私が直接、海外工場の生産管理担当者との調整を行います。お客様のご意見・ご要望など余すところなく伝えます。ご期待に応える製品作りをお約束します。価格、品質、納期等、お気軽にご相談下さい。</p>
                                </div>
                                <div class="w-[110px] flex-shrink-0 flex flex-col items-center">
                                    <img src="https://picsum.photos/110/110?random=21" alt="品質管理／黄" class="w-full h-auto mb-1">
                                    <span class="text-[10px] text-dark-gray">品質管理／黄</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Imported Products & Work Scenes Section -->
                <div class="bg-gray-blue-bg p-lg mb-2xl">
                    <!-- Title -->
                    <h2 class="text-center text-[22px] font-bold text-dark-gray mb-3">輸入製品の紹介と作業風景</h2>
                    <div class="flex h-[2px] w-full mb-lg mx-auto">
                        <div class="w-[20%] bg-primary-blue"></div>
                        <div class="w-[80%] bg-[#999999]"></div>
                    </div>

                    <!-- Metal Products -->
                    <p class="text-center text-[12px] text-dark-gray font-bold mb-md">金属加工製品</p>
                    <div class="grid grid-cols-3 gap-3 mb-xl">
                        <!-- item 1 -->
                        <div class="relative group overflow-hidden">
                            <img src="https://picsum.photos/300/200?random=30" alt="アングル加工品" class="w-full h-auto">
                            <div class="absolute bottom-0 w-full bg-[#3d4f5c]/90 text-white text-center text-[10px] font-bold py-[4px] leading-tight px-1">
                                アングル加工品、金型も安価に製作<br>可能です。
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="relative group overflow-hidden">
                            <img src="https://picsum.photos/300/200?random=31" alt="真鍮ダボ" class="w-full h-auto">
                            <div class="absolute bottom-0 w-full bg-[#3d4f5c]/90 text-white text-center text-[10px] font-bold py-[4px] leading-tight px-1">
                                真鍮ダボ 長さ20mm<br>クロメートメッキ付
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="relative group overflow-hidden">
                            <img src="https://picsum.photos/300/200?random=32" alt="鉄L型金具" class="w-full h-auto">
                            <div class="absolute bottom-0 w-full bg-[#3d4f5c]/90 text-white text-center text-[10px] font-bold py-[6px] px-1">
                                鉄L型金具 曲げ加工
                            </div>
                        </div>
                    </div>

                    <!-- Other Imported Products -->
                    <p class="text-center text-[12px] text-dark-gray font-bold mb-md">金属加工製品はもちろん、その他の輸入品の取り扱いもお任せ下さい！</p>
                    <div class="grid grid-cols-3 gap-3 mb-xl">
                        <!-- Row 1 -->
                        <div class="relative group overflow-hidden">
                            <img src="https://picsum.photos/300/200?random=33" alt="ジャッキ" class="w-full h-auto">
                            <div class="absolute bottom-0 w-full bg-[#5a5a5a]/90 text-white text-center text-[10px] font-bold py-[6px]">ジャッキ</div>
                        </div>
                        <div class="relative group overflow-hidden">
                            <img src="https://picsum.photos/300/200?random=34" alt="スプロケット" class="w-full h-auto">
                            <div class="absolute bottom-0 w-full bg-[#5a5a5a]/90 text-white text-center text-[10px] font-bold py-[6px]">スプロケット</div>
                        </div>
                        <div class="relative group overflow-hidden">
                            <img src="https://picsum.photos/300/200?random=35" alt="スプロケット" class="w-full h-auto">
                            <div class="absolute bottom-0 w-full bg-[#5a5a5a]/90 text-white text-center text-[10px] font-bold py-[6px]">スプロケット</div>
                        </div>
                        
                        <!-- Row 2 -->
                        <div class="relative group overflow-hidden">
                            <img src="https://picsum.photos/300/200?random=36" alt="ベアリング" class="w-full h-auto">
                            <div class="absolute bottom-0 w-full bg-[#5a5a5a]/90 text-white text-center text-[10px] font-bold py-[6px]">ベアリング</div>
                        </div>
                        <div class="relative group overflow-hidden">
                            <img src="https://picsum.photos/300/200?random=37" alt="家具" class="w-full h-auto">
                            <div class="absolute bottom-0 w-full bg-[#5a5a5a]/90 text-white text-center text-[10px] font-bold py-[6px]">家具</div>
                        </div>
                        <div class="relative group overflow-hidden">
                            <img src="https://picsum.photos/300/200?random=38" alt="ワインケース" class="w-full h-auto">
                            <div class="absolute bottom-0 w-full bg-[#5a5a5a]/90 text-white text-center text-[10px] font-bold py-[6px]">ワインケース</div>
                        </div>

                        <!-- Row 3 -->
                        <div class="relative group overflow-hidden">
                            <img src="https://picsum.photos/300/200?random=39" alt="桐箱" class="w-full h-auto">
                            <div class="absolute bottom-0 w-full bg-[#5a5a5a]/90 text-white text-center text-[10px] font-bold py-[6px]">桐箱</div>
                        </div>
                        <div class="relative group overflow-hidden">
                            <img src="https://picsum.photos/300/200?random=40" alt="収納ケース" class="w-full h-auto">
                            <div class="absolute bottom-0 w-full bg-[#5a5a5a]/90 text-white text-center text-[10px] font-bold py-[6px]">収納ケース</div>
                        </div>
                        <div class="relative group overflow-hidden">
                            <img src="https://picsum.photos/300/200?random=41" alt="ガイガーカウンター" class="w-full h-auto">
                            <div class="absolute bottom-0 w-full bg-[#5a5a5a]/90 text-white text-center text-[10px] font-bold py-[6px]">ガイガーカウンター</div>
                        </div>
                    </div>

                    <!-- Work Scenes -->
                    <p class="text-center text-[12px] text-dark-gray font-bold mb-md">先は、中国工場にて視察に行ってきました。</p>
                    
                    <!-- Row 1 (3 columns) -->
                    <div class="grid grid-cols-3 gap-3 mb-3">
                        <div class="relative group overflow-hidden">
                            <img src="https://picsum.photos/300/200?random=42" alt="NC旋盤加工です。" class="w-full h-auto">
                            <div class="absolute bottom-0 w-full bg-[#202020]/80 text-white text-center text-[10px] font-bold py-[5px]">NC旋盤加工です。</div>
                        </div>
                        <div class="relative group overflow-hidden">
                            <img src="https://picsum.photos/300/200?random=43" alt="黙々と作業中です。" class="w-full h-auto">
                            <div class="absolute bottom-0 w-full bg-[#202020]/80 text-white text-center text-[10px] font-bold py-[5px]">黙々と作業中です。</div>
                        </div>
                        <div class="relative group overflow-hidden">
                            <img src="https://picsum.photos/300/200?random=44" alt="検品や、箱詰め、出荷作業等です。" class="w-full h-auto">
                            <div class="absolute bottom-0 w-full bg-[#202020]/80 text-white text-center text-[10px] font-bold py-[5px]">検品や、箱詰め、出荷作業等です。</div>
                        </div>
                    </div>
                    
                    <!-- Row 2 (2 columns) -->
                    <div class="grid grid-cols-2 gap-3 mb-xl">
                        <div class="relative group overflow-hidden">
                            <img src="https://picsum.photos/400/250?random=45" alt="黙々と組立て作業中です。" class="w-full h-auto">
                            <div class="absolute bottom-0 w-full bg-[#202020]/80 text-white text-center text-[11px] font-bold py-[6px]">黙々と組立て作業中です。</div>
                        </div>
                        <div class="relative group overflow-hidden">
                            <img src="https://picsum.photos/400/250?random=46" alt="品質管理も徹底しております。" class="w-full h-auto">
                            <div class="absolute bottom-0 w-full bg-[#202020]/80 text-white text-center text-[11px] font-bold py-[6px]">品質管理も徹底しております。</div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col items-center gap-2 mb-xl">
                        <a href="#" class="block w-[350px] max-w-full text-center bg-[#4d4d4d] hover:bg-[#333333] transition text-white font-bold text-[14px] py-[10px]">
                            視察の様子をさらに見る ＞
                        </a>
                        <a href="#" class="block w-[350px] max-w-full text-center bg-[#4d4d4d] hover:bg-[#333333] transition text-white font-bold text-[14px] py-[10px]">
                            海外調達の虎の巻コラムはこちら ＞
                        </a>
                    </div>

                    <!-- Green Contact Banner -->
                      <div class="mt-xl border-[2px] border-cta-green p-[10px]">
                        <div class="text-center font-bold text-cta-green mb-2 text-[14px]">
                            まずは、お気軽にご相談ください。お電話でのお問い合わせも承っております。
                        </div>
                        <a href="#" class="block bg-gradient-to-b from-cta-light-green to-cta-green text-white text-center py-md rounded-full text-[24px] font-bold shadow-md hover:from-cta-hover-light hover:to-cta-hover-dark transition flex items-center justify-center">
                            <span class="bg-white text-cta-green rounded-full w-[28px] h-[28px] flex items-center justify-center text-[18px] mr-sm font-black pt-[2px]">▶</span> お問い合わせ・見積依頼はこちら
                        </a>
                        <div class="flex flex-row justify-center mt-3 gap-sm">
                            <span class="border border-cta-green text-cta-green font-bold text-[12px] px-3 py-1 rounded-full bg-white text-center">小ロット・短納期・特急品もご相談ください</span>
                            <span class="border border-cta-green text-cta-green font-bold text-[12px] px-3 py-1 rounded-full bg-white text-center">ZOOM等によるオンラインミーティング対応可能</span>
                        </div>
                    </div>
                    <!-- <div class="text-center">
                        <a href="#" class="inline-block hover:opacity-90 transition">
                            <img src="{{ asset('assets/images/banner1.png') }}" alt="お問い合わせ・見積依頼" class="w-full max-w-[600px] h-auto">
                        </a>
                    </div> -->
                </div>

                <!-- Overseas Procurement Cases Section -->
                <div class="mb-2xl">
                    <!-- Title -->
                    <h2 class="text-center text-[22px] font-bold text-dark-gray mb-3 mt-xl">海外調達事例</h2>
                    <div class="flex h-[2px] w-full mb-lg mx-auto">
                        <div class="w-[20%] bg-[#5cb1c6]"></div>
                        <div class="w-[80%] bg-[#999999]"></div>
                    </div>

                    <!-- Banner Image -->
                    <div class="mb-lg">
                        <img src="https://picsum.photos/700/250?random=50" alt="海外調達事例" class="w-full h-auto">
                    </div>

                    <!-- Case Study -->
                    <div class="mb-xl">
                        <!-- Header -->
                        <div class="flex flex-row items-center mb-xl">
                            <!-- CASE badge -->
                            <div class="relative bg-[#5cb1c6] text-white font-bold text-[18px] px-4 py-2 mr-4 flex-shrink-0">
                                CASE
                                <div class="absolute -bottom-[8px] left-[15px] w-0 h-0 border-l-[8px] border-l-transparent border-t-[8px] border-t-[#5cb1c6] border-r-[8px] border-r-transparent"></div>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-[12px] text-dark-gray leading-tight mb-1">金属加工メーカー様</span>
                                <h3 class="text-[20px] font-bold text-dark-gray">自社製品より約３割のコストダウンを達成</h3>
                            </div>
                        </div>

                        <!-- Consultation Section -->
                        <!-- Title with lines -->
                        <div class="flex items-center justify-center mb-6">
                            <div class="flex-1 h-[1px] bg-[#5cb1c6]"></div>
                            <h4 class="px-6 text-[20px] font-bold text-dark-gray">ご相談</h4>
                            <div class="flex-1 h-[1px] bg-[#5cb1c6]"></div>
                        </div>
                        <!-- Text -->
                        <div class="text-center text-[13px] text-dark-gray leading-[2] mb-8">
                            <p>お客様のコストダウンの要求が厳しく、自社工場の効率化だけでは対応が出来ない。</p>
                            <p>海外調達は未経験だし品質も分からないので手を出しにくい。</p>
                        </div>

                        <!-- Arrow Down -->
                        <div class="flex justify-center mb-8">
                            <svg class="w-12 h-12 text-[#555555]" fill="currentColor" viewBox="0 0 24 24"><path d="M4.2 7.8l7.8 7.8 7.8-7.8 2.4 2.4-10.2 10.2-10.2-10.2z"/></svg>
                        </div>

                        <!-- Problem Solving Section -->
                        <!-- Title with lines -->
                        <div class="flex items-center justify-center mb-6">
                            <div class="flex-1 h-[1px] bg-[#5cb1c6]"></div>
                            <h4 class="px-6 text-[20px] font-bold text-dark-gray">問題解決</h4>
                            <div class="flex-1 h-[1px] bg-[#5cb1c6]"></div>
                        </div>
                        
                        <!-- Light gray box with checklist -->
                        <div class="bg-[#f1f5f4] p-md mb-8">
                            <ul class="text-[13px] text-dark-gray leading-[2.2]">
                                <li class="flex items-start mb-1">
                                    <svg class="w-[20px] h-[20px] text-[#5cb1c6] mr-2 mt-[4px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                    <span>中国、韓国、台湾の厳選されたメーカーで見積り。</span>
                                </li>
                                <li class="flex items-start mb-1">
                                    <svg class="w-[20px] h-[20px] text-[#5cb1c6] mr-2 mt-[4px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                    <span>コストを重視して中国メーカーに決定。</span>
                                </li>
                                <li class="flex items-start mb-1">
                                    <svg class="w-[20px] h-[20px] text-[#5cb1c6] mr-2 mt-[4px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                    <span>量産前に製品サンプルを確認後、量産製作。</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-[20px] h-[20px] text-[#5cb1c6] mr-2 mt-[4px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                    <span>自社製品より約３割のコストダウンを達成。</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Button -->
                        <div class="flex justify-center mb-xl">
                            <a href="#" class="block w-[400px] max-w-full text-center bg-[#4d4d4d] hover:bg-[#333333] transition text-white font-bold text-[16px] py-[12px]">
                                解決事例をさらに見る ＞
                            </a>
                        </div>

                        <!-- Customer Voice Box -->
                        <div class="border-[4px] border-double border-[#c0cfdb] p-lg bg-white mt-8 mx-4">
                            <!-- Header -->
                            <div class="flex flex-row items-center mb-4">
                                <!-- VOICE badge -->
                                <div class="relative bg-[#5cb1c6] text-white font-bold text-[16px] px-3 py-1 mr-4 flex-shrink-0">
                                    VOICE
                                    <div class="absolute -bottom-[6px] left-[10px] w-0 h-0 border-l-[6px] border-l-transparent border-t-[6px] border-t-[#5cb1c6] border-r-[6px] border-r-transparent"></div>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-[10px] text-dark-gray leading-tight mb-1">お客様の声</span>
                                    <h3 class="text-[18px] font-bold text-dark-gray">精密機器メーカーY社 N様</h3>
                                </div>
                            </div>
                            
                            <!-- Yellow Text Box -->
                            <div class="bg-[#fcf8e3] p-md mb-lg text-[13px] text-dark-gray leading-[1.8]">
                                <p class="mb-1">無理な納期、なんでもかんでもお願いして、<span class="text-primary-blue hover:opacity-80 transition border-b border-primary-blue cursor-pointer">迅速な対応して頂いて助かってます。</span></p>
                                <p>特殊な業界なため、品質の面でいろいろと、うるさくなる部分はありますが、今後ともご協力お願い致します。</p>
                            </div>
                            
                            <!-- Button inside Voice Box -->
                            <div class="flex justify-center">
                                <a href="#" class="block w-[350px] max-w-full text-center bg-[#4d4d4d] hover:bg-[#333333] transition text-white font-bold text-[14px] py-[10px]">
                                    お客様の声をさらに見る ＞
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Q&A Section -->
                <div class="bg-gray-blue-bg p-lg mb-2xl">
                    <!-- Title -->
                    <h2 class="text-center text-[22px] font-bold text-dark-gray mb-6">海外調達・輸入品 Q&A（よくあるご質問）</h2>

                    <!-- Banner Image -->
                    <div class="mb-lg">
                        <img src="https://picsum.photos/700/400?random=60" alt="Q&A" class="w-full h-auto">
                    </div>

                    <!-- Questions Container -->
                    <div class="mb-10 mt-8 px-4">
                        
                        <!-- Question 1 -->
                        <div class="mb-8">
                            <div class="flex items-end border-b border-[#5cb1c6] pb-2 mb-3">
                                <span class="text-[#5cb1c6] text-[36px] font-bold leading-none mr-3">Q</span>
                                <h3 class="text-[#5cb1c6] font-bold text-[18px]">国内生産と海外製品（海外調達品）の品質の違いはありませんか？</h3>
                            </div>
                            <div class="text-[13px] text-dark-gray leading-[2] pl-[45px]">
                                <p>ご安心ください。国内・海外ともに同一基準で品質管理し、量産前には必ず試作・検証を実施。お客様の承認後に量産へ移行するため、国内生産同等の品質を保証しています。（<a href="#" class="border-b border-dark-gray text-dark-gray hover:opacity-80">詳細はQ&Aページへ</a>）</p>
                            </div>
                        </div>

                        <!-- Question 2 -->
                        <div class="mb-8">
                            <div class="flex items-end border-b border-[#5cb1c6] pb-2 mb-3">
                                <span class="text-[#5cb1c6] text-[36px] font-bold leading-none mr-3">Q</span>
                                <h3 class="text-[#5cb1c6] font-bold text-[18px]">不良が出た場合の対応策を教えて下さい。</h3>
                            </div>
                            <div class="text-[13px] text-dark-gray leading-[2] pl-[45px]">
                                <p>万が一の不良発生時は、迅速な原因分析と代替品の手配・再製作を行います。現地・国内スタッフが連携し、再発防止を徹底する保証体制を整えています。（<a href="#" class="border-b border-dark-gray text-dark-gray hover:opacity-80">詳細はQ&Aページへ</a>）</p>
                            </div>
                        </div>

                    </div>

                    <!-- More Questions -->
                    <div class="flex flex-col items-center mb-8">
                        <div class="flex items-center justify-center w-full mb-4">
                            <div class="flex-1 h-[1px] bg-[#5cb1c6]"></div>
                            <div class="px-6 text-[16px] font-bold text-dark-gray text-center">
                                「直送時の品質管理は？」 「chemSHERPAは対応してる？」
                            </div>
                            <div class="flex-1 h-[1px] bg-[#5cb1c6]"></div>
                        </div>
                        <p class="text-center text-[12px] text-dark-gray mb-6">
                            この他にも海外調達に関するご質問は、専用のQ&Aページで詳しくお答えしています。ぜひご覧ください。
                        </p>
                        <a href="#" class="block w-[400px] max-w-full text-center bg-[#4d4d4d] hover:bg-[#333333] transition text-white font-bold text-[15px] py-[14px]">
                            海外調達のQ&A一覧ページはこちら
                        </a>
                    </div>

                                    <!-- Green Contact Banner (Moved to bottom) -->
                <div class="mt-xl border-[2px] border-cta-green p-[10px] bg-white mb-xl">
                    <div class="text-center font-bold text-cta-green mb-2 text-[14px]">
                        まずは、お気軽にご相談ください。お電話でのお問い合わせも承っております。
                    </div>
                    <a href="#" class="block bg-gradient-to-b from-cta-light-green to-cta-green text-white text-center py-md rounded-full text-[24px] font-bold shadow-md hover:from-cta-hover-light hover:to-cta-hover-dark transition flex items-center justify-center">
                        <span class="bg-white text-cta-green rounded-full w-[28px] h-[28px] flex items-center justify-center text-[18px] mr-sm font-black pt-[2px]">▶</span> お問い合わせ・見積依頼はこちら
                    </a>
                    <div class="flex flex-row justify-center mt-3 gap-sm">
                        <span class="border border-cta-green text-cta-green font-bold text-[12px] px-3 py-1 rounded-full bg-white text-center">小ロット・短納期・特急品もご相談ください</span>
                        <span class="border border-cta-green text-cta-green font-bold text-[12px] px-3 py-1 rounded-full bg-white text-center">ZOOM等によるオンラインミーティング対応可能</span>
                    </div>
                </div>
                
                </div>

                <!-- Cost Down 4 Tips Section Intro -->
                <div class="border-t border-b border-[#c0cfdb] bg-[#f4f8f9] py-[40px] px-lg mb-2xl flex items-center justify-between">
                    <!-- Left Text -->
                    <div class="flex-1 flex flex-col justify-center items-center px-4">
                        <h2 class="text-[26px] font-bold text-dark-gray tracking-widest mb-6">コストダウン４つのコツ！</h2>
                        <div class="text-[13px] text-dark-gray leading-[2] text-center">
                            <p>当社に依頼が一番多いのはコストダウンの案件です。</p>
                            <p>金属加工のコストダウンのコツを簡単にお伝えしたいと思います。</p>
                            <p>ぜひ、ご相談ください。</p>
                        </div>
                    </div>
                    <!-- Right Image -->
                    <div class="w-[140px] flex-shrink-0 flex flex-col items-center ml-4">
                        <img src="https://picsum.photos/140/140?random=70" alt="担当／木村" class="w-full h-auto mb-2 border border-[#e5e7eb]">
                        <span class="text-[11px] font-bold text-dark-gray">担当／木村</span>
                    </div>
                </div>

                <!-- Cost Down 4 Tips Content -->
                <div class="mb-2xl">
                    <!-- Point 1 -->
                    <div class="flex justify-center mb-6 mt-8">
                        <svg class="w-12 h-12 text-[#555555]" fill="currentColor" viewBox="0 0 24 24"><path d="M4.2 7.8l7.8 7.8 7.8-7.8 2.4 2.4-10.2 10.2-10.2-10.2z"/></svg>
                    </div>
                    <div class="mb-10 px-4">
                        <div class="flex justify-center mb-6">
                            <div class="flex items-end border-b-[2px] border-[#5cb1c6] pb-2 px-2">
                                <span class="text-[14px] font-bold text-dark-gray mr-1 mb-1">Point</span>
                                <div class="bg-[#5cb1c6] text-white font-bold text-[32px] leading-none px-4 py-1 mr-4">1</div>
                                <div class="flex flex-col pb-1">
                                    <span class="text-[10px] text-[#5cb1c6] font-bold leading-tight mb-1">コストダウン４つのコツ！</span>
                                    <h3 class="text-[#5cb1c6] font-bold text-[22px] leading-none">外注先を変える！</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row gap-6">
                            <div class="w-1/2 flex flex-col">
                                <div class="bg-[#f0f0f0] text-center text-[12px] font-bold text-dark-gray py-2 mb-4">メリット</div>
                                <ul class="text-[13px] text-dark-gray leading-[1.8]">
                                    <li class="flex items-start mb-2">
                                        <svg class="w-[18px] h-[18px] text-[#5cb1c6] mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                        <span>買い手市場なだけにコストダウンに繋がるケースは多い。</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-1/2 flex flex-col">
                                <div class="bg-[#f0f0f0] text-center text-[12px] font-bold text-dark-gray py-2 mb-4">デメリット</div>
                                <ul class="text-[13px] text-dark-gray leading-[1.8]">
                                    <li class="flex items-start mb-2">
                                        <svg class="w-[18px] h-[18px] text-[#5cb1c6] mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                        <span>非常に古い案件の場合、材料高で合わない場合がある。</span>
                                    </li>
                                    <li class="flex items-start mb-2">
                                        <svg class="w-[18px] h-[18px] text-[#5cb1c6] mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                        <span>プレス加工品、樹脂成型品など金型が必要な製品の場合、従来の依頼先から移管する場合にトラブルになる可能性がある。</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Point 2 -->
                    <div class="flex justify-center mb-6 mt-8">
                        <svg class="w-12 h-12 text-[#555555]" fill="currentColor" viewBox="0 0 24 24"><path d="M4.2 7.8l7.8 7.8 7.8-7.8 2.4 2.4-10.2 10.2-10.2-10.2z"/></svg>
                    </div>
                    <div class="mb-10 px-4">
                        <div class="flex justify-center mb-6">
                            <div class="flex items-end border-b-[2px] border-[#5cb1c6] pb-2 px-2">
                                <span class="text-[14px] font-bold text-dark-gray mr-1 mb-1">Point</span>
                                <div class="bg-[#5cb1c6] text-white font-bold text-[32px] leading-none px-4 py-1 mr-4">2</div>
                                <div class="flex flex-col pb-1">
                                    <span class="text-[10px] text-[#5cb1c6] font-bold leading-tight mb-1">コストダウン４つのコツ！</span>
                                    <h3 class="text-[#5cb1c6] font-bold text-[22px] leading-none">ロットを変える！</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row gap-6">
                            <div class="w-1/2 flex flex-col">
                                <div class="bg-[#f0f0f0] text-center text-[12px] font-bold text-dark-gray py-2 mb-4">メリット</div>
                                <ul class="text-[13px] text-dark-gray leading-[1.8]">
                                    <li class="flex items-start mb-2">
                                        <svg class="w-[18px] h-[18px] text-[#5cb1c6] mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                        <span>ロットを増やす事によって原材料費を下げられる。</span>
                                    </li>
                                    <li class="flex items-start mb-2">
                                        <svg class="w-[18px] h-[18px] text-[#5cb1c6] mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                        <span>ロットを減らす事によって諸経費負担が減らせる場合がある。</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-1/2 flex flex-col">
                                <div class="bg-[#f0f0f0] text-center text-[12px] font-bold text-dark-gray py-2 mb-4">デメリット</div>
                                <ul class="text-[13px] text-dark-gray leading-[1.8]">
                                    <li class="flex items-start mb-2">
                                        <svg class="w-[18px] h-[18px] text-[#5cb1c6] mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                        <span>ロットを増やせば諸経費負担が増え、減らせば原材料費、コストメリットが減る。</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Point 3 -->
                    <div class="flex justify-center mb-6 mt-8">
                        <svg class="w-12 h-12 text-[#555555]" fill="currentColor" viewBox="0 0 24 24"><path d="M4.2 7.8l7.8 7.8 7.8-7.8 2.4 2.4-10.2 10.2-10.2-10.2z"/></svg>
                    </div>
                    <div class="mb-10 px-4">
                        <div class="flex justify-center mb-6">
                            <div class="flex items-end border-b-[2px] border-[#5cb1c6] pb-2 px-2">
                                <span class="text-[14px] font-bold text-dark-gray mr-1 mb-1">Point</span>
                                <div class="bg-[#5cb1c6] text-white font-bold text-[32px] leading-none px-4 py-1 mr-4">3</div>
                                <div class="flex flex-col pb-1">
                                    <span class="text-[10px] text-[#5cb1c6] font-bold leading-tight mb-1">コストダウン４つのコツ！</span>
                                    <h3 class="text-[#5cb1c6] font-bold text-[22px] leading-none">VA案で無駄をなくす！</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row gap-6">
                            <div class="w-1/2 flex flex-col">
                                <div class="bg-[#f0f0f0] text-center text-[12px] font-bold text-dark-gray py-2 mb-4">メリット</div>
                                <ul class="text-[13px] text-dark-gray leading-[1.8]">
                                    <li class="flex items-start mb-2">
                                        <svg class="w-[18px] h-[18px] text-[#5cb1c6] mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                        <span>買い手の価格的負担が比較的少なくコストダウンが出来る。</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-1/2 flex flex-col">
                                <div class="bg-[#f0f0f0] text-center text-[12px] font-bold text-dark-gray py-2 mb-4">デメリット</div>
                                <ul class="text-[13px] text-dark-gray leading-[1.8]">
                                    <li class="flex items-start mb-2">
                                        <svg class="w-[18px] h-[18px] text-[#5cb1c6] mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                        <span>製品そのものを見直すために長期に渡る場合がある。</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Point 4 -->
                    <div class="flex justify-center mb-6 mt-8">
                        <svg class="w-12 h-12 text-[#555555]" fill="currentColor" viewBox="0 0 24 24"><path d="M4.2 7.8l7.8 7.8 7.8-7.8 2.4 2.4-10.2 10.2-10.2-10.2z"/></svg>
                    </div>
                    <div class="mb-10 px-4">
                        <div class="flex justify-center mb-6">
                            <div class="flex items-end border-b-[2px] border-[#5cb1c6] pb-2 px-2">
                                <span class="text-[14px] font-bold text-dark-gray mr-1 mb-1">Point</span>
                                <div class="bg-[#5cb1c6] text-white font-bold text-[32px] leading-none px-4 py-1 mr-4">4</div>
                                <div class="flex flex-col pb-1">
                                    <span class="text-[10px] text-[#5cb1c6] font-bold leading-tight mb-1">コストダウン４つのコツ！</span>
                                    <h3 class="text-[#5cb1c6] font-bold text-[22px] leading-none">海外調達・輸入品!?</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row gap-6">
                            <div class="w-1/2 flex flex-col">
                                <div class="bg-[#f0f0f0] text-center text-[12px] font-bold text-dark-gray py-2 mb-4">メリット</div>
                                <ul class="text-[13px] text-dark-gray leading-[1.8]">
                                    <li class="flex items-start mb-2">
                                        <svg class="w-[18px] h-[18px] text-[#5cb1c6] mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                        <span>品質が見合えば大幅なコストダウンに繋がる場合がある。</span>
                                    </li>
                                    <li class="flex items-start mb-2">
                                        <svg class="w-[18px] h-[18px] text-[#5cb1c6] mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                        <span>金型等のイニシャルコストの負担が少ない。</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-1/2 flex flex-col">
                                <div class="bg-[#f0f0f0] text-center text-[12px] font-bold text-dark-gray py-2 mb-4">デメリット</div>
                                <ul class="text-[13px] text-dark-gray leading-[1.8]">
                                    <li class="flex items-start mb-2">
                                        <svg class="w-[18px] h-[18px] text-[#5cb1c6] mr-2 mt-[2px] flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="6" width="12" height="12" stroke-width="1.5" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l3 3L22 4" /></svg>
                                        <span>品質、納期のコントロールが難しい。</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Green Contact Banner -->
                <div class="mt-xl border-[2px] border-cta-green p-[10px] bg-white mb-xl">
                    <div class="text-center font-bold text-cta-green mb-2 text-[14px]">
                        まずは、お気軽にご相談ください。お電話でのお問い合わせも承っております。
                    </div>
                    <a href="#" class="block bg-gradient-to-b from-cta-light-green to-cta-green text-white text-center py-md rounded-full text-[24px] font-bold shadow-md hover:from-cta-hover-light hover:to-cta-hover-dark transition flex items-center justify-center">
                        <span class="bg-white text-cta-green rounded-full w-[28px] h-[28px] flex items-center justify-center text-[18px] mr-sm font-black pt-[2px]">▶</span> お問い合わせ・見積依頼はこちら
                    </a>
                    <div class="flex flex-row justify-center mt-3 gap-sm">
                        <span class="border border-cta-green text-cta-green font-bold text-[12px] px-3 py-1 rounded-full bg-white text-center">小ロット・短納期・特急品もご相談ください</span>
                        <span class="border border-cta-green text-cta-green font-bold text-[12px] px-3 py-1 rounded-full bg-white text-center">ZOOM等によるオンラインミーティング対応可能</span>
                    </div>
                </div>

                <!-- Bottom Banner Links -->
                <div class="mt-xl">
                    <!-- Price List Download Banner -->
                    <div class="mb-6 text-center">
                        <a href="#" class="inline-block hover:opacity-90 transition w-full">
                            <img src="https://picsum.photos/700/180?random=80" alt="価格表 無料ダウンロード" class="w-full h-auto">
                        </a>
                    </div>

                    <!-- 6 Small Banners Grid -->
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <a href="#" class="block hover:opacity-90 transition">
                            <img src="https://picsum.photos/340/100?random=81" alt="多品種・小ロットの製造" class="w-full h-auto border border-gray-200">
                        </a>
                        <a href="#" class="block hover:opacity-90 transition">
                            <img src="https://picsum.photos/340/100?random=82" alt="製缶加工なら" class="w-full h-auto border border-gray-200">
                        </a>
                        <a href="#" class="block hover:opacity-90 transition">
                            <img src="https://picsum.photos/340/100?random=83" alt="食品製造現場のお悩みを共に解決" class="w-full h-auto border border-gray-200">
                        </a>
                        <a href="#" class="block hover:opacity-90 transition">
                            <img src="https://picsum.photos/340/100?random=84" alt="ベトナムからの部品調達＆加工" class="w-full h-auto border border-gray-200">
                        </a>
                        <a href="#" class="block hover:opacity-90 transition">
                            <img src="https://picsum.photos/340/100?random=85" alt="事業を再構築したい" class="w-full h-auto border border-gray-200">
                        </a>
                        <a href="#" class="block hover:opacity-90 transition">
                            <img src="https://picsum.photos/340/100?random=86" alt="ステンレスネジ販売" class="w-full h-auto border border-gray-200">
                        </a>
                    </div>
                </div>

                <!-- Breadcrumbs -->
                <div class="text-[12px] text-dark-gray mt-6 mb-4">
                    <a href="#" class="hover:underline">トップページ</a> <span>/</span> <span>海外調達・輸入品</span>
                </div>
            </div>

        <!-- Right Sidebar Component -->
        <x-sidebar />
    </main>

    <!-- Full Width Footer Banner Links -->
    <div class="w-full bg-[#e3e6e8] py-8">
        <div class="max-w-[1000px] mx-auto flex justify-center gap-6">
            <!-- Link 1 -->
            <a href="#" class="relative block w-[230px] hover:opacity-90 transition">
                <img src="https://picsum.photos/230/150?random=90" alt="お問い合わせ・見積依頼" class="w-full h-[150px] object-cover">
                <div class="absolute bottom-0 left-0 w-full bg-black/60 text-white text-center text-[12px] font-bold py-2">
                    お問い合わせ・見積依頼
                </div>
            </a>
            <!-- Link 2 -->
            <a href="#" class="relative block w-[230px] hover:opacity-90 transition">
                <img src="https://picsum.photos/230/150?random=91" alt="加工事例の紹介" class="w-full h-[150px] object-cover">
                <div class="absolute bottom-0 left-0 w-full bg-[#0a1e3f]/80 text-white text-center text-[12px] font-bold py-2">
                    加工事例の紹介
                </div>
            </a>
            <!-- Link 3 -->
            <a href="#" class="relative block w-[230px] hover:opacity-90 transition">
                <img src="https://picsum.photos/230/150?random=92" alt="金属加工コラム" class="w-full h-[150px] object-cover">
                <div class="absolute bottom-0 left-0 w-full bg-black/60 text-white text-center text-[12px] font-bold py-2">
                    金属加工コラム
                </div>
            </a>
            <!-- Link 4 -->
            <a href="#" class="relative block w-[230px] hover:opacity-90 transition">
                <img src="https://picsum.photos/230/150?random=93" alt="採用情報" class="w-full h-[150px] object-cover">
                <div class="absolute bottom-0 left-0 w-full bg-black/60 text-white text-center text-[12px] font-bold py-2">
                    採用情報
                </div>
            </a>
        </div>
    </div>

    <!-- Footer Component -->
    <x-footer />

</body>
</html>

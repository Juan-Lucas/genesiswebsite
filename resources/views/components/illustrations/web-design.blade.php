<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 500 400" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background shapes -->
    <circle cx="380" cy="100" r="60" fill="#667eea" opacity="0.1"/>
    <circle cx="120" cy="300" r="70" fill="#764ba2" opacity="0.1"/>

    <!-- Large browser window -->
    <g transform="translate(80, 80)">
        <!-- Window frame -->
        <rect x="0" y="0" width="340" height="240" rx="10" fill="white" stroke="#E5E7EB" stroke-width="3"/>

        <!-- Browser header -->
        <rect x="0" y="0" width="340" height="35" rx="10" fill="#F3F4F6"/>
        <rect x="0" y="25" width="340" height="10" fill="#F3F4F6"/>

        <!-- Browser dots -->
        <circle cx="15" cy="17" r="5" fill="#EF4444"/>
        <circle cx="32" cy="17" r="5" fill="#F59E0B"/>
        <circle cx="49" cy="17" r="5" fill="#10B981"/>

        <!-- Address bar -->
        <rect x="75" y="10" width="250" height="15" rx="7" fill="white"/>
        <line x1="85" y1="17" x2="95" y2="17" stroke="#9CA3AF" stroke-width="2"/>
        <line x1="105" y1="15" x2="180" y2="15" stroke="#D1D5DB" stroke-width="2"/>
        <line x1="105" y1="19" x2="160" y2="19" stroke="#D1D5DB" stroke-width="2"/>

        <!-- Content area -->
        <rect x="15" y="50" width="310" height="175" rx="5" fill="#FAFAFA"/>

        <!-- Hero section with gradient -->
        <rect x="15" y="50" width="310" height="80" rx="5" fill="url(#heroGradient)"/>

        <!-- Content blocks -->
        <rect x="25" y="145" width="90" height="70" rx="8" fill="white" stroke="#E5E7EB" stroke-width="2"/>
        <rect x="125" y="145" width="90" height="70" rx="8" fill="white" stroke="#E5E7EB" stroke-width="2"/>
        <rect x="225" y="145" width="90" height="70" rx="8" fill="white" stroke="#E5E7EB" stroke-width="2"/>

        <!-- Icons in blocks -->
        <circle cx="70" cy="170" r="12" fill="#667eea" opacity="0.3"/>
        <circle cx="170" cy="170" r="12" fill="#764ba2" opacity="0.3"/>
        <circle cx="270" cy="170" r="12" fill="#10B981" opacity="0.3"/>

        <!-- Text lines -->
        <line x1="40" y1="190" x2="100" y2="190" stroke="#D1D5DB" stroke-width="2"/>
        <line x1="40" y1="198" x2="85" y2="198" stroke="#D1D5DB" stroke-width="2"/>
        <line x1="140" y1="190" x2="200" y2="190" stroke="#D1D5DB" stroke-width="2"/>
        <line x1="140" y1="198" x2="185" y2="198" stroke="#D1D5DB" stroke-width="2"/>
        <line x1="240" y1="190" x2="300" y2="190" stroke="#D1D5DB" stroke-width="2"/>
        <line x1="240" y1="198" x2="285" y2="198" stroke="#D1D5DB" stroke-width="2"/>
    </g>

    <!-- Designer character -->
    <g transform="translate(180, 280)">
        <!-- Head -->
        <circle cx="0" cy="0" r="22" fill="#D2A679"/>
        <!-- Hair -->
        <path d="M -18 -5 Q 0 -22 18 -5" fill="#1A1A1A"/>
        <!-- Face -->
        <circle cx="-7" cy="0" r="2" fill="#1A1A1A"/>
        <circle cx="7" cy="0" r="2" fill="#1A1A1A"/>
        <path d="M -5 7 Q 0 10 5 7" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" fill="none"/>

        <!-- Body -->
        <rect x="-25" y="22" width="50" height="50" rx="25" fill="#667eea"/>

        <!-- Arm with pen -->
        <ellipse cx="35" cy="40" rx="10" ry="28" fill="#667eea" transform="rotate(20 35 40)"/>
        <ellipse cx="50" cy="55" rx="6" ry="15" fill="#D2A679" transform="rotate(20 50 55)"/>

        <!-- Pen -->
        <rect x="52" y="65" width="4" height="25" fill="#F59E0B" transform="rotate(25 54 77)"/>
        <path d="M 56 88 L 54 93 L 58 91 Z" fill="#1F2937" transform="rotate(25 56 90)"/>
    </g>

    <!-- Floating design elements -->
    <g transform="translate(320, 260)">
        <!-- Color palette -->
        <rect x="0" y="0" width="60" height="45" rx="5" fill="white" stroke="#E5E7EB" stroke-width="2"/>
        <circle cx="15" cy="15" r="8" fill="#667eea"/>
        <circle cx="35" cy="15" r="8" fill="#764ba2"/>
        <circle cx="45" cy="15" r="8" fill="#10B981"/>
        <circle cx="15" cy="30" r="8" fill="#F59E0B"/>
        <circle cx="35" cy="30" r="8" fill="#EF4444"/>
        <circle cx="45" cy="30" r="8" fill="#8B5CF6"/>
    </g>

    <!-- Cursor -->
    <g transform="translate(280, 160)">
        <path d="M 0 0 L 0 20 L 7 15 L 12 22 L 15 20 L 10 13 L 18 11 Z" fill="white" stroke="#1F2937" stroke-width="1.5"/>
    </g>

    <!-- Sparkles -->
    <path d="M 60 60 L 63 66 L 69 69 L 63 72 L 60 78 L 57 72 L 51 69 L 57 66 Z" fill="#FCD34D" opacity="0.7"/>
    <path d="M 420 200 L 422 204 L 426 206 L 422 208 L 420 212 L 418 208 L 414 206 L 418 204 Z" fill="#667eea" opacity="0.7"/>

    <defs>
        <linearGradient id="heroGradient" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:#667eea;stop-opacity:0.3" />
            <stop offset="100%" style="stop-color:#764ba2;stop-opacity:0.3" />
        </linearGradient>
    </defs>
</svg>

<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 500 400" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <rect width="500" height="400" fill="transparent"/>

    <!-- Tablet/Document Device -->
    <g transform="translate(250, 200)">
        <!-- Device Frame -->
        <rect x="-140" y="-160" width="280" height="320" rx="12" fill="#1F2937" stroke="#667eea" stroke-width="3"/>

        <!-- Screen -->
        <rect x="-130" y="-150" width="260" height="300" rx="6" fill="#F9FAFB"/>

        <!-- Article Header -->
        <rect x="-120" y="-140" width="240" height="60" rx="4" fill="#667eea" opacity="0.1"/>

        <!-- Featured Image -->
        <rect x="-110" y="-130" width="100" height="40" rx="3" fill="#667eea" opacity="0.3"/>

        <!-- Title Lines -->
        <rect x="-0" y="-125" width="90" height="6" rx="3" fill="#1F2937" opacity="0.8"/>
        <rect x="-0" y="-112" width="70" height="4" rx="2" fill="#1F2937" opacity="0.5"/>

        <!-- Author Info -->
        <g transform="translate(-110, -80)">
            <circle cx="0" cy="0" r="8" fill="#667eea" opacity="0.4"/>
            <rect x="12" y="-3" width="40" height="3" rx="1.5" fill="#6B7280"/>
            <rect x="12" y="3" width="30" height="2" rx="1" fill="#9CA3AF"/>
        </g>

        <!-- Article Content - Text Lines -->
        <rect x="-120" y="-50" width="220" height="3" rx="1.5" fill="#1F2937" opacity="0.4"/>
        <rect x="-120" y="-42" width="240" height="3" rx="1.5" fill="#1F2937" opacity="0.4"/>
        <rect x="-120" y="-34" width="200" height="3" rx="1.5" fill="#1F2937" opacity="0.4"/>
        <rect x="-120" y="-26" width="230" height="3" rx="1.5" fill="#1F2937" opacity="0.4"/>

        <!-- Content Image -->
        <rect x="-120" y="-10" width="240" height="60" rx="4" fill="#764ba2" opacity="0.2"/>
        <circle cx="0" cy="20" r="15" fill="#764ba2" opacity="0.3"/>

        <!-- More Text Lines -->
        <rect x="-120" y="60" width="210" height="3" rx="1.5" fill="#1F2937" opacity="0.4"/>
        <rect x="-120" y="68" width="240" height="3" rx="1.5" fill="#1F2937" opacity="0.4"/>
        <rect x="-120" y="76" width="190" height="3" rx="1.5" fill="#1F2937" opacity="0.4"/>

        <!-- Action Buttons -->
        <g transform="translate(-70, 100)">
            <rect x="0" y="0" width="50" height="20" rx="10" fill="#667eea" opacity="0.3"/>
            <rect x="60" y="0" width="50" height="20" rx="10" fill="#764ba2" opacity="0.3"/>
        </g>

        <!-- Device Shadow -->
        <ellipse cx="0" cy="170" rx="120" ry="10" fill="#667eea" opacity="0.15"/>
    </g>

    <!-- Floating UI Elements -->
    <!-- Like Icon -->
    <g transform="translate(100, 100)">
        <circle cx="0" cy="0" r="18" fill="#EF4444" opacity="0.2"/>
        <path d="M0,-6 C-3,-9 -8,-9 -8,-4 C-8,2 0,8 0,8 C0,8 8,2 8,-4 C8,-9 3,-9 0,-6 Z" fill="#EF4444" opacity="0.5"/>
    </g>

    <!-- Comment Icon -->
    <g transform="translate(380, 140)">
        <circle cx="0" cy="0" r="18" fill="#3B82F6" opacity="0.2"/>
        <rect x="-8" y="-5" width="16" height="10" rx="2" fill="none" stroke="#3B82F6" stroke-width="1.5" opacity="0.5"/>
        <path d="M-3,5 L0,8 L3,5" fill="none" stroke="#3B82F6" stroke-width="1.5" opacity="0.5"/>
    </g>

    <!-- Share Icon -->
    <g transform="translate(90, 320)">
        <circle cx="0" cy="0" r="18" fill="#10B981" opacity="0.2"/>
        <path d="M5,-5 L-5,0 L5,5 M-5,0 L3,0" stroke="#10B981" stroke-width="1.5" fill="none" opacity="0.5"/>
    </g>

    <!-- Bookmark Icon -->
    <g transform="translate(400, 300)">
        <circle cx="0" cy="0" r="18" fill="#F59E0B" opacity="0.2"/>
        <path d="M-5,-6 L-5,6 L0,2 L5,6 L5,-6 Z" fill="#F59E0B" opacity="0.5"/>
    </g>

    <!-- Decorative Circles -->
    <circle cx="70" cy="60" r="25" fill="#667eea" opacity="0.08"/>
    <circle cx="420" cy="370" r="30" fill="#764ba2" opacity="0.08"/>
    <circle cx="430" cy="70" r="20" fill="#667eea" opacity="0.08"/>
</svg>

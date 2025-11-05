<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <rect width="400" height="300" fill="#F9FAFB"/>

    <!-- Newspaper/Article -->
    <g transform="translate(200, 150)">
        <!-- Paper -->
        <rect x="-90" y="-100" width="180" height="200" rx="5" fill="white" stroke="#E5E7EB" stroke-width="2"/>

        <!-- Header -->
        <rect x="-80" y="-90" width="160" height="30" fill="#667eea" opacity="0.1"/>

        <!-- Headline -->
        <rect x="-70" y="-80" width="100" height="6" rx="3" fill="#667eea"/>
        <rect x="-70" y="-68" width="80" height="4" rx="2" fill="#667eea" opacity="0.6"/>

        <!-- Image placeholder -->
        <rect x="-80" y="-50" width="70" height="50" rx="3" fill="#E5E7EB"/>
        <circle cx="-45" cy="-35" r="8" fill="#9CA3AF"/>
        <polygon points="-80,-15 -58,-30 -40,-15 -40,-10 -80,-10" fill="#6B7280"/>

        <!-- Text columns -->
        <g fill="#1F2937" opacity="0.4">
            <!-- Right column -->
            <rect x="0" y="-50" width="75" height="3" rx="1.5"/>
            <rect x="0" y="-43" width="75" height="3" rx="1.5"/>
            <rect x="0" y="-36" width="70" height="3" rx="1.5"/>
            <rect x="0" y="-29" width="75" height="3" rx="1.5"/>
            <rect x="0" y="-22" width="65" height="3" rx="1.5"/>
            <rect x="0" y="-15" width="75" height="3" rx="1.5"/>
            <rect x="0" y="-8" width="70" height="3" rx="1.5"/>

            <!-- Bottom left -->
            <rect x="-80" y="5" width="75" height="3" rx="1.5"/>
            <rect x="-80" y="12" width="75" height="3" rx="1.5"/>
            <rect x="-80" y="19" width="70" height="3" rx="1.5"/>
            <rect x="-80" y="26" width="75" height="3" rx="1.5"/>

            <!-- Bottom right -->
            <rect x="0" y="5" width="75" height="3" rx="1.5"/>
            <rect x="0" y="12" width="75" height="3" rx="1.5"/>
            <rect x="0" y="19" width="70" height="3" rx="1.5"/>
            <rect x="0" y="26" width="75" height="3" rx="1.5"/>
        </g>

        <!-- Subheading -->
        <rect x="-80" y="40" width="120" height="5" rx="2.5" fill="#764ba2" opacity="0.7"/>

        <!-- More text -->
        <g fill="#1F2937" opacity="0.3">
            <rect x="-80" y="50" width="160" height="2" rx="1"/>
            <rect x="-80" y="56" width="160" height="2" rx="1"/>
            <rect x="-80" y="62" width="150" height="2" rx="1"/>
            <rect x="-80" y="68" width="160" height="2" rx="1"/>
            <rect x="-80" y="74" width="140" height="2" rx="1"/>
            <rect x="-80" y="80" width="160" height="2" rx="1"/>
            <rect x="-80" y="86" width="155" height="2" rx="1"/>
        </g>
    </g>

    <!-- Decorative elements -->
    <circle cx="80" cy="60" r="25" fill="#667eea" opacity="0.1"/>
    <circle cx="330" cy="240" r="20" fill="#764ba2" opacity="0.1"/>
</svg>

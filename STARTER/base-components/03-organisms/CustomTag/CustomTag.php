<?php
/**
 * Custom Tag
 * used in /ProductImages.php
 */
?>

<svg
        xmlns:svg="http://www.w3.org/2000/svg"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 408 208"
        width="408"
        height="208"
        :class="'CustomTag CustomTag--' + size"
>
    <rect
            :class="'CustomTag-size CustomTag-size--rect-1x3 CustomTag-background ' + backgroundColor"
            width="400"
            height="133"
    />
    <rect
            :class="'CustomTag-size CustomTag-size--rect-1x3 CustomTag-backgroundOverlay ' + backgroundColor"
            width="400"
            height="133"
    />
    <circle
            :class="'CustomTag-size CustomTag-size--round-1-5 CustomTag-background ' + backgroundColor"
            cx="200"
            cy="100"
            r="99"
    />
    <circle
            :class="'CustomTag-size CustomTag-size--round-1-5 CustomTag-backgroundOverlay ' + backgroundColor"
            cx="200"
            cy="100"
            r="99"
    />
    <rect
            :class="'CustomTag-size CustomTag-size--square-1-5 CustomTag-background ' + backgroundColor"
            x="100"
            width="200"
            height="200"
    />
    <rect
            :class="'CustomTag-size CustomTag-size--square-1-5 CustomTag-backgroundOverlay ' + backgroundColor"
            x="100"
            width="200"
            height="200"
    />
    <text
            x="200"
            y="50"
            :class="'CustomTag-text CustomTag-textOne ' + textColor"
            text-anchor="middle"
    >
        {{ lineOne }}
    </text>
    <text
            x="200"
            y="75"
            :class="'CustomTag-text CustomTag-textTwo ' + textColor"
            text-anchor="middle"
    >
        {{ lineTwo }}
    </text>
    <text
            x="200"
            y="100"
            :class="'CustomTag-text CustomTag-number ' + textColor"
            text-anchor="middle"
    >
        {{ number }}
    </text>

    <g :class="'CustomTag-mounting CustomTag-mounting-' + mountingConfiguration">
        <circle
                class="CustomTag-mountingHole CustomTag-mountingHoleTop"
                cx="200"
                cy="15"
                r="10"
        />
        <circle
                class="CustomTag-mountingHole CustomTag-mountingHoleLeft"
                r="10"
                cx="15"
                cy="65"
        />
        <circle
                class="CustomTag-mountingHole CustomTag-mountingHoleRight"
                r="10"
                cx="385"
                cy="65"
        />
        <circle
                class="CustomTag-mountingHole CustomTag-mountingHoleTopLeft"
                r="10"
                cx="15"
                cy="15"
        />
        <circle
                class="CustomTag-mountingHole CustomTag-mountingHoleTopRight"
                r="10"
                cx="385"
                cy="15"
        />
        <circle
                class="CustomTag-mountingHole CustomTag-mountingHoleBottomRight"
                r="10"
                cx="385"
                cy="118"
        />
        <circle
                class="CustomTag-mountingHole CustomTag-mountingHoleBottomLeft"
                r="10"
                cx="15"
                cy="118"
        />
    </g>

    <defs>
        <linearGradient id="CustomTag-gradient"
                        :class="'CustomTag-gradient ' + backgroundColor"
                        gradientTransform="rotate(25)">
            <stop class="CustomTag-gradientOne" offset="25%" stop-color="#F60"/>
            <stop class="CustomTag-gradientTwo" offset="75%" stop-color="#FFF"/>
            <stop class="CustomTag-gradientThree" offset="100%" stop-color="#F60"/>
        </linearGradient>
        <filter id="shadow">
            <feDropShadow dx="2" dy="2" stdDeviation="2" flood-opacity="0.2"/>
        </filter>
    </defs>
</svg>

/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ 696:
/***/ ((__unused_webpack_module, exports) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports.ActionLinks = void 0;
const ActionLinks = ({
  image,
  alt,
  title,
  message,
  button,
  link
}) => {
  return /*#__PURE__*/React.createElement("div", {
    className: "growgoal__action_links"
  }, /*#__PURE__*/React.createElement("img", {
    src: image,
    alt: alt
  }), /*#__PURE__*/React.createElement("p", {
    className: "growgoal__action_links__title"
  }, title), /*#__PURE__*/React.createElement("p", {
    className: "growgoal__action_links__message"
  }, message), /*#__PURE__*/React.createElement("a", {
    className: "components-button is-secondary",
    href: link,
    target: "_blank",
    rel: "noreferrer"
  }, button));
};
exports.ActionLinks = ActionLinks;

/***/ }),

/***/ 19:
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

"use strict";


var _interopRequireDefault = __webpack_require__(994);
Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports.SettingsPage = void 0;
var _react = __webpack_require__(609);
var _notices = __webpack_require__(692);
var _data = __webpack_require__(143);
var _i18n = __webpack_require__(723);
var _api = _interopRequireDefault(__webpack_require__(863));
var _components = __webpack_require__(427);
var _settingsPanel = __webpack_require__(425);
var _actionLinksPanel = __webpack_require__(442);
const Notices = () => {
  const notices = (0, _data.useSelect)(select => select(_notices.store).getNotices().filter(notice => 'snackbar' === notice.type), []);
  const {
    removeNotice
  } = (0, _data.useDispatch)(_notices.store);
  return /*#__PURE__*/React.createElement(_components.SnackbarList, {
    className: "edit-site-notices",
    notices: notices,
    onRemove: removeNotice
  });
};
const SETTINGS = {
  DESCRIPTION_META_TAG: '_description_meta_tag',
  SKIP_LINK: '_skip_link',
  HEADER_FOOTER: '_header_footer',
  PAGE_TITLE: '_page_title',
  HELLO_STYLE: '_hello_style',
  HELLO_THEME: '_hello_theme'
};
const SettingsPage = () => {
  const [hasLoaded, setHasLoaded] = (0, _react.useState)(false);
  const [settingsData, setSettingsData] = (0, _react.useState)({});
  const settingsPrefix = 'growgoal_settings';

  /**
   * Update settings data.
   *
   * @param {string} settingsName
   * @param {string} settingsValue
   */
  const updateSettings = (settingsName, settingsValue) => {
    setSettingsData({
      ...settingsData,
      [settingsName]: settingsValue
    });
  };

  /**
   * Save settings to server.
   */
  const saveSettings = () => {
    const data = {};
    Object.values(SETTINGS).forEach(value => data[`${settingsPrefix}${value}`] = settingsData[value] ? 'true' : '');
    const settings = new _api.default.models.Settings(data);
    settings.save();
    (0, _data.dispatch)('core/notices').createNotice('success', (0, _i18n.__)('Settings Saved', 'growgoal'), {
      type: 'snackbar',
      isDismissible: true
    });
  };
  (0, _react.useEffect)(() => {
    const fetchSettings = async () => {
      try {
        await _api.default.loadPromise;
        const settings = new _api.default.models.Settings();
        const response = await settings.fetch();
        const data = {};
        Object.values(SETTINGS).forEach(value => data[value] = response[`${settingsPrefix}${value}`]);
        setSettingsData(data);
        setHasLoaded(true);
      } catch (error) {
        // eslint-disable-next-line no-console
        console.error(error);
      }
    };
    if (hasLoaded) {
      return;
    }
    fetchSettings();
  }, [settingsData]);
  if (!hasLoaded) {
    return /*#__PURE__*/React.createElement(_components.Placeholder, null, /*#__PURE__*/React.createElement(_components.Spinner, null));
  }
  return /*#__PURE__*/React.createElement(_react.Fragment, null, /*#__PURE__*/React.createElement("div", {
    className: "growgoal__header"
  }, /*#__PURE__*/React.createElement("div", {
    className: "growgoal__container"
  }, /*#__PURE__*/React.createElement("div", {
    className: "growgoal__title"
  }, /*#__PURE__*/React.createElement("h1", null, (0, _i18n.__)('Hello Theme Settings', 'growgoal'))))), /*#__PURE__*/React.createElement("div", {
    className: "growgoal__main"
  }, /*#__PURE__*/React.createElement(_components.Panel, null, /*#__PURE__*/React.createElement(_settingsPanel.SettingsPanel, {
    SETTINGS,
    settingsData,
    updateSettings
  }), /*#__PURE__*/React.createElement(_components.Button, {
    isPrimary: true,
    onClick: saveSettings
  }, (0, _i18n.__)('Save Settings', 'growgoal'))), /*#__PURE__*/React.createElement(_actionLinksPanel.ActionLinksPanel, null)), /*#__PURE__*/React.createElement("div", {
    className: "growgoal__notices"
  }, /*#__PURE__*/React.createElement(Notices, null)));
};
exports.SettingsPage = SettingsPage;

/***/ }),

/***/ 442:
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports.ActionLinksPanel = void 0;
var _i18n = __webpack_require__(723);
var _actionLinks = __webpack_require__(696);
const actionLinks = {
  'install-elementor': {
    image: helloAdminData.templateDirectoryURI + '/assets/images/elementor.svg',
    alt: (0, _i18n.__)('Elementor', 'growgoal'),
    title: (0, _i18n.__)('Install Elementor', 'growgoal'),
    message: (0, _i18n.__)('Create cross-site header & footer using Elementor.', 'growgoal'),
    button: (0, _i18n.__)('Install Elementor', 'growgoal'),
    link: helloAdminData.actionLinkURL
  },
  'activate-elementor': {
    image: helloAdminData.templateDirectoryURI + '/assets/images/elementor.svg',
    alt: (0, _i18n.__)('Elementor', 'growgoal'),
    title: (0, _i18n.__)('Activate Elementor', 'growgoal'),
    message: (0, _i18n.__)('Create cross-site header & footer using Elementor.', 'growgoal'),
    button: (0, _i18n.__)('Activate Elementor', 'growgoal'),
    link: helloAdminData.actionLinkURL
  },
  'activate-header-footer-experiment': {
    image: helloAdminData.templateDirectoryURI + '/assets/images/elementor.svg',
    alt: (0, _i18n.__)('Elementor', 'growgoal'),
    title: (0, _i18n.__)('Style using Elementor', 'growgoal'),
    message: (0, _i18n.__)('Design your cross-site header & footer from Elementor’s "Site Settings" panel.', 'growgoal'),
    button: (0, _i18n.__)('Activate header & footer experiment', 'growgoal'),
    link: helloAdminData.actionLinkURL
  },
  'style-header-footer': {
    image: helloAdminData.templateDirectoryURI + '/assets/images/elementor.svg',
    alt: (0, _i18n.__)('Elementor', 'growgoal'),
    title: (0, _i18n.__)('Style cross-site header & footer', 'growgoal'),
    message: (0, _i18n.__)('Customize your cross-site header & footer from Elementor’s "Site Settings" panel.', 'growgoal'),
    button: (0, _i18n.__)('Start Designing', 'growgoal'),
    link: helloAdminData.actionLinkURL
  }
};
const ActionLinksPanel = () => {
  if (!helloAdminData.actionLinkType) {
    return;
  }
  return /*#__PURE__*/React.createElement(_actionLinks.ActionLinks, actionLinks[helloAdminData.actionLinkType]);
};
exports.ActionLinksPanel = ActionLinksPanel;

/***/ }),

/***/ 425:
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

"use strict";


Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports.SettingsPanel = void 0;
var _i18n = __webpack_require__(723);
var _components = __webpack_require__(427);
const SettingsPanel = ({
  SETTINGS,
  settingsData,
  updateSettings
}) => {
  const protocol = window.location.protocol || 'https:';
  const hostname = window.location.hostname || 'example.com';
  const prefix = protocol + '//' + hostname;
  return /*#__PURE__*/React.createElement(_components.PanelBody, {
    title: (0, _i18n.__)('Hello Theme Settings', 'growgoal')
  }, /*#__PURE__*/React.createElement(_components.Notice, {
    status: "warning",
    isDismissible: "false"
  }, /*#__PURE__*/React.createElement(_components.Dashicon, {
    icon: "flag"
  }), (0, _i18n.__)('Be cautious, disabling some of the following options may break your website.', 'growgoal')), /*#__PURE__*/React.createElement(_components.ToggleControl, {
    label: (0, _i18n.__)('Disable description meta tag', 'growgoal'),
    help: (0, _i18n.__)('Remove the description meta tag in singular content pages that contain an excerpt.', 'growgoal'),
    checked: !!settingsData[SETTINGS.DESCRIPTION_META_TAG] || false,
    onChange: value => updateSettings(SETTINGS.DESCRIPTION_META_TAG, value)
  }), /*#__PURE__*/React.createElement("code", {
    className: "code-example"
  }, " <meta name=\"description\" content=\"...\" /> "), /*#__PURE__*/React.createElement(_components.ToggleControl, {
    label: (0, _i18n.__)('Disable skip link', 'growgoal'),
    help: (0, _i18n.__)('Remove the "Skip to content" link used by screen-readers and users navigating with a keyboard.', 'growgoal'),
    checked: !!settingsData[SETTINGS.SKIP_LINK] || false,
    onChange: value => updateSettings(SETTINGS.SKIP_LINK, value)
  }), /*#__PURE__*/React.createElement("code", {
    className: "code-example"
  }, " <a class=\"skip-link screen-reader-text\" href=\"#content\"> Skip to content </a> "), /*#__PURE__*/React.createElement(_components.ToggleControl, {
    label: (0, _i18n.__)('Disable cross-site header & footer', 'growgoal'),
    help: (0, _i18n.__)('Remove the header & footer sections from all pages, and their CSS/JS files.', 'growgoal'),
    checked: !!settingsData[SETTINGS.HEADER_FOOTER] || false,
    onChange: value => updateSettings(SETTINGS.HEADER_FOOTER, value)
  }), /*#__PURE__*/React.createElement("code", {
    className: "code-example"
  }, " <header id=\"site-header\" class=\"site-header\"> ... </header> "), /*#__PURE__*/React.createElement("code", {
    className: "code-example"
  }, " <footer id=\"site-footer\" class=\"site-footer\"> ... </footer> "), /*#__PURE__*/React.createElement(_components.ToggleControl, {
    label: (0, _i18n.__)('Disable page title', 'growgoal'),
    help: (0, _i18n.__)('Remove the section above the content that contains the main heading of the page.', 'growgoal'),
    checked: !!settingsData[SETTINGS.PAGE_TITLE] || false,
    onChange: value => updateSettings(SETTINGS.PAGE_TITLE, value)
  }), /*#__PURE__*/React.createElement("code", {
    className: "code-example"
  }, " <div class=\"page-header\"> <h1 class=\"entry-title\"> Post title </h1> </div> "), /*#__PURE__*/React.createElement(_components.ToggleControl, {
    label: (0, _i18n.__)('Unregister Hello style.css', 'growgoal'),
    help: (0, _i18n.__)("Disable Hello theme's style.css file which contains CSS reset rules for unified cross-browser view.", 'growgoal'),
    checked: !!settingsData[SETTINGS.HELLO_STYLE] || false,
    onChange: value => updateSettings(SETTINGS.HELLO_STYLE, value)
  }), /*#__PURE__*/React.createElement("code", {
    className: "code-example"
  }, " <link rel=\"stylesheet\" href=\"", prefix, "/wp-content/themes/growgoal/style.min.css\" /> "), /*#__PURE__*/React.createElement(_components.ToggleControl, {
    label: (0, _i18n.__)('Unregister Hello theme.css', 'growgoal'),
    help: (0, _i18n.__)("Disable Hello theme's theme.css file which contains CSS rules that style WordPress elements.", 'growgoal'),
    checked: !!settingsData[SETTINGS.HELLO_THEME] || false,
    onChange: value => updateSettings(SETTINGS.HELLO_THEME, value)
  }), /*#__PURE__*/React.createElement("code", {
    className: "code-example"
  }, " <link rel=\"stylesheet\" href=\"", prefix, "/wp-content/themes/growgoal/theme.min.css\" /> "));
};
exports.SettingsPanel = SettingsPanel;

/***/ }),

/***/ 374:
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ 609:
/***/ ((module) => {

"use strict";
module.exports = window["React"];

/***/ }),

/***/ 863:
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["api"];

/***/ }),

/***/ 427:
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["components"];

/***/ }),

/***/ 143:
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["data"];

/***/ }),

/***/ 87:
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["element"];

/***/ }),

/***/ 723:
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["i18n"];

/***/ }),

/***/ 692:
/***/ ((module) => {

"use strict";
module.exports = window["wp"]["notices"];

/***/ }),

/***/ 994:
/***/ ((module) => {

function _interopRequireDefault(obj) {
  return obj && obj.__esModule ? obj : {
    "default": obj
  };
}
module.exports = _interopRequireDefault, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";


__webpack_require__(374);
var _element = __webpack_require__(87);
var _settingsPage = __webpack_require__(19);
const App = () => {
  return /*#__PURE__*/React.createElement(_settingsPage.SettingsPage, null);
};
document.addEventListener('DOMContentLoaded', () => {
  const rootElement = document.getElementById('growgoal-settings');
  if (rootElement) {
    (0, _element.render)( /*#__PURE__*/React.createElement(App, null), rootElement);
  }
});
})();

/******/ })()
;
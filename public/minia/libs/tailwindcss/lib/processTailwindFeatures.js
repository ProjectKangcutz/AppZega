"use strict";
Object.defineProperty(exports, "__esModule", {
    value: true
});
Object.defineProperty(exports, "default", {
    enumerable: true,
    get: ()=>processTailwindFeatures
});
const _normalizeTailwindDirectives = /*#__PURE__*/ _interopRequireDefault(require("./lib/normalizeTailwindDirectives"));
const _expandTailwindAtRules = /*#__PURE__*/ _interopRequireDefault(require("./lib/expandTailwindAtRules"));
const _expandApplyAtRules = /*#__PURE__*/ _interopRequireDefault(require("./lib/expandApplyAtRules"));
const _evaluateTailwindFunctions = /*#__PURE__*/ _interopRequireDefault(require("./lib/evaluateTailwindFunctions"));
const _substituteScreenAtRules = /*#__PURE__*/ _interopRequireDefault(require("./lib/substituteScreenAtRules"));
const _resolveDefaultsAtRules = /*#__PURE__*/ _interopRequireDefault(require("./lib/resolveDefaultsAtRules"));
const _collapseAdjacentRules = /*#__PURE__*/ _interopRequireDefault(require("./lib/collapseAdjacentRules"));
const _collapseDuplicateDeclarations = /*#__PURE__*/ _interopRequireDefault(require("./lib/collapseDuplicateDeclarations"));
const _partitionApplyAtRules = /*#__PURE__*/ _interopRequireDefault(require("./lib/partitionApplyAtRules"));
const _detectNesting = /*#__PURE__*/ _interopRequireDefault(require("./lib/detectNesting"));
const _setupContextUtils = require("./lib/setupContextUtils");
const _featureFlags = require("./featureFlags");
function _interopRequireDefault(obj) {
    return obj && obj.__esModule ? obj : {
        default: obj
    };
}
function processTailwindFeatures(setupContext) {
    return function(root, result) {
        let { tailwindDirectives , applyDirectives  } = (0, _normalizeTailwindDirectives.default)(root);
        (0, _detectNesting.default)()(root, result);
        // Partition apply rules that are found in the css
        // itself.
        (0, _partitionApplyAtRules.default)()(root, result);
        let context = setupContext({
            tailwindDirectives,
            applyDirectives,
            registerDependency (dependency) {
                result.messages.push({
                    plugin: "tailwindcss",
                    parent: result.opts.from,
                    ...dependency
                });
            },
            createContext (tailwindConfig, changedContent) {
                return (0, _setupContextUtils.createContext)(tailwindConfig, changedContent, root);
            }
        })(root, result);
        if (context.tailwindConfig.separator === "-") {
            throw new Error("The '-' character cannot be used as a custom separator in JIT mode due to parsing ambiguity. Please use another character like '_' instead.");
        }
        (0, _featureFlags.issueFlagNotices)(context.tailwindConfig);
        (0, _expandTailwindAtRules.default)(context)(root, result);
        // Partition apply rules that are generated by
        // addComponents, addUtilities and so on.
        (0, _partitionApplyAtRules.default)()(root, result);
        (0, _expandApplyAtRules.default)(context)(root, result);
        (0, _evaluateTailwindFunctions.default)(context)(root, result);
        (0, _substituteScreenAtRules.default)(context)(root, result);
        (0, _resolveDefaultsAtRules.default)(context)(root, result);
        (0, _collapseAdjacentRules.default)(context)(root, result);
        (0, _collapseDuplicateDeclarations.default)(context)(root, result);
    };
}

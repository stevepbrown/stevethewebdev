 Components

**Constituent partials should be prefixed components.**

The Components layer is where we begin to style recognisable pieces of UI. We're still binding onto classes here, so our specificity hasn't yet increased. However, this layer is more explicit than the last one in that we are now styling explicit, designed pieces of the DOM.

We shouldn't find any selectors with a lower specificity than one class in this layer. This is where the majority of your work will happen after initial project set-up. Adding new components and features usually makes up the vast majority of development.
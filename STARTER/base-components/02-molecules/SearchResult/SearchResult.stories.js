import React from 'react';

import SearchResult from './SearchResult.twig';

import SearchResultData from './SearchResult.yml';

/**
 * Storybook Definition.
 */
export default { title: 'Molecules/Search Result' };

export const SearchResultExample = () => (
  <div dangerouslySetInnerHTML={{ __html: SearchResult(SearchResultData) }} />
);
